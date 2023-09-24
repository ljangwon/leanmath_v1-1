<?php
  $my_name = "Jake, Lee";
?>
<hr>
using narmal php, name 
<p> 안녕하세요. 제 이름은 <?=$my_name?>입니다! </p>

<hr>
using ajax, name 

<p> Ajax 안녕하세요. 제 이름은 <span id="name"></span>입니다!! </p>
<script>
  $.ajax({
    url: "/lmath/static/ajax/myname.php",
    type: "get",
  }).done( function(data) {
    $('#name').text(data);
  });
</script>

<hr>
<p>
using ID, Calc example <br>
<input type = "number" id="a">
<input type = "number" id="b">
</p>

<button onclick="add1()"> Add1 !!</button>

Result1: <span id="result1"></span>

<script>
  function add1() {
    $.ajax( {
      url: "/lmath/static/ajax/calc.php",
      type: "get",
      data: {
        a: $('#a').val(),
        b: $('#b').val(),
      } 
    }).done( function(data) {
      $('#result1').text(data);
    });
  }
</script>

<hr>

<p>
using form serialize, Calc example <br>
<form>
<input type = "number" name="a">
<input type = "number" name="b">
</form>
</p>


<button onclick="add2()"> Add2 !!</button>

Result2: <span id="result2"></span>

<script>
  function add2() {
    $.ajax( {
      url: "/lmath/static/ajax/calc.php",
      type: "get",
      data: $('form').serialize() 
    }).done( function(data) {
      $('#result2').text(data);
    });
  }
</script>

<hr>
using Json, name

<div class="board">
  <p id = "result3"> Hi! Jake, Lee </p>
  <button onclick="next()" class="block-button"> Next </button>
</div>
<script>
  var index = 0;
  function next() {
    $.ajax( {
      url: "/lmath/static/ajax/rel.php",
      type: "get",
      data: { index: index++ }
    }).done( function(data)  {
      data = JSON.parse(data);
      $('#result3').text('My ' + data.desc + ' is ' + data.name + '!!');
      if(index>2) index = 0;
    } );
  }
</script>



<p>Type 'correct' to validate.</p>
<form id='form1' action="javascript:alert( 'success 1 !' );">
  <div>
    <input id='test' type="text">
    <input type="submit">
  </div>
</form>

<form id='form1' action="javascript:alert( 'success 2 !' );">
  <div>
    <input id='test' type="text">
    <input type="submit">
  </div>
</form>
<span id='sp'></span>

<button onclick="test()"> test </button>
 
<script>
  function test() {
    $( "form:has(div)" ).submit();
  }
  
</script>
