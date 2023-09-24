<?php
class Mobile extends My_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->_require_login(site_url('mobile'), 10);

		$this->load->model('student_m');
		$this->load->model('mobile_m');
		$this->load->model('book_m');
		$this->load->model('book_chapter_m');
	}

	function index()
	{
		$this->get_page_1();
	}

	function get_page_1();
	{
		$this->load->view(
			'common/s1_head_v',
			array()
		);

		$this->load->view(
			'common/s3_topbar_v',
			array()
		);

		$this->load->view(
			'mobile/s4_mobile_page_1_v',
			array()
		);

		$this->load->view(
			'common/s5_footer_v',
			array()
		);

		$this->load->view(
			'common/s6_common_modal_v',
			array()
		);

		$this->load->view(
			'common/s7_common_script_v',
			array()
		);

	}

	// create
	function create_book()
	{
		$new_book_id = $this->book_m->create(
			array(
				'title' => $this->input->post('title'),
				'grade1' => $this->input->post('grade1'),
				'grade2' => $this->input->post('grade2')
			)
		);

		if (!$new_book_id) {
			alert("book 추가 실패했습니다.", site_url('/book'));
		} else {

			alert("book 추가 성공했습니다.", site_url('/book/get_book/' . $new_book_id));
		}
	}

	// read ajax data of book list
	function ajax_read_book_list()
	{
		$data = $this->book_m->r_list(
			array(
				'workspace' => $this->input->post('workspace'),
				'status' => $this->input->post('status'),
				'grade1' => $this->input->post('grade1')
			)
		);
		echo json_encode($data);
	}

	// read ajax data of book chapter list
	function ajax_read_book_chapter_list()
	{
		$book_id = $this->input->post('book_id');

		$data = $this->book_chapter_m->r_list($book_id);
		echo json_encode($data);
	}

	// read ajax data of book chapter list
	function ajax_create_chapter()
	{
		$book_id = $this->input->post('book_id');

		$data = $this->book_chapter_m->create(
			array(
				'book_id' => $book_id
			)
		);
		echo json_encode($data);
	}

	// update data of book chapter by ajax
	function ajax_excel_datasave()
	{
		$id = $_POST['id'];
		$header = $_POST['header'];
		$value = $_POST['value'];

		if (!$header) {
			exit;
		}

		$dbColumn = "";
		switch ($header) {
			case "id":
				$dbColumn = "id";
				break;
			case "단원번호":
				$dbColumn = "number";
				break;
			case "단원명":
				$dbColumn = "title";
				break;
				$dbColumn = "none";
		}

		$result = null;

		if ($dbColumn && $id && $value) {

			$sql = "update book_chapter set " . $dbColumn . "='" . $value . "' where id='" . $id . "' ";

			$result = $this->db->query($sql);

			return $result;
		}
	}

	// show book list
	function get_book_list()
	{
		$this->load->view(
			'common/s1_head_v',
			array()
		);

		$books = $this->book_m->r_list();

		$this->load->view(
			'book/s2_book_sidebar_v',
			array(
				'books' => $books
			)
		);

		$this->load->view(
			'common/s3_topbar_v',
			array()
		);

		$this->load->view(
			'book/s4_book_list_v',
			array()
		);

		$this->load->view(
			'common/s5_footer_v',
			array()
		);

		$this->load->view(
			'common/s6_common_modal_v',
			array()
		);

		$this->load->view(
			'book/s6_book_list_modal_v',
			array()
		);

		$this->load->view(
			'common/s7_common_script_v',
			array()
		);

		$this->load->view(
			'book/s7_book_list_script_v',
			array()
		);
	}

	// show empty page 
	function get_empty()
	{
		$this->load->view(
			'common/s1_head_v',
			array()
		);

		$books = $this->book_m->r_book_list();

		$this->load->view(
			'book/s2_book_sidebar_v',
			array(
				'books' => $books
			)
		);

		$this->load->view(
			'common/s3_topbar_v',
			array()
		);

		$this->load->view(
			'book/s4_book_none_v',
			array()
		);

		$this->load->view(
			'common/s5_footer_v',
			array()
		);

		$this->load->view(
			'common/s6_common_modal_v',
			array()
		);

		$this->load->view(
			'common/s7_common_script_v',
			array()
		);
	}

	// show detail page of a book 
	function get_book($book_id = null)
	{
		if (empty($book_id)) {
			$book_id = $this->session->userdata('book_id');
		} else {
			$this->session->set_userdata('book_id', $book_id);
		}

		if (empty($book_id)) {
			alert('book_id의 값이 없습니다', site_url('/book'));
		}

		$this->load->view(
			'common/s1_head_v',
			array()
		);

		$books = $this->book_m->r_list();

		$this->load->view(
			'book/s2_book_sidebar_v',
			array(
				'books' => $books
			)
		);

		$this->load->view(
			'common/s3_topbar_v',
			array()
		);

		// book Data 로드하기 
		$book = $this->book_m->r_get($book_id);

		// book chapter Data 로드하기 
		$chapters = $this->book_chapter_m->r_list($book_id);

		$this->load->view(
			'book/s4_book_detail_v',
			array(
				'book' => $book,
				'chapters' => $chapters
			)
		);

		$this->load->view(
			'common/s5_footer_v',
			array()
		);

		$this->load->view(
			'common/s6_common_modal_v',
			array()
		);

		$this->load->view(
			'book/s6_book_detail_modal_v',
			array()
		);

		$this->load->view(
			'common/s7_common_script_v',
			array()
		);

		$this->load->view(
			'book/s7_book_detail_script_v',
			array()
		);
	}

	// update
	function update_book()
	{
		$book_id = $this->session->userdata('book_id');

		$result = $this->book_m->update(
			array(
				'id' => $this->input->post('id'),
				'title' => $this->input->post('book_title'),
				'grade1' => $this->input->post('grade1'),
				'grade2' => $this->input->post('grade2'),
				'chapter_count' => $this->input->post('chapter_count'),
				'status' => $this->input->post('status')
			)
		);

		if (!$result) {
			alert("book 업데이트가 실패했습니다.", site_url('/book/get_book/' . $book_id));
		} else {
			alert("book 업데이트가 성공했습니다.", site_url('/book/get_book/' . $this->input->post('id')));
		}
	}

	// delete
	function ajax_delete_chapter()
	{
		$chapter_id = $this->input->post('chapter_id');

		$data = $this->book_chapter_m->delete($chapter_id);

		echo json_encode($data);
	}

	// delete
	function delete_book()
	{
		$book_id = $this->input->post('book_id');

		$data = $this->book_m->delete($book_id);
		$this->session->set_userdata('book_id', '');
		echo json_encode($data);
	}
}
