<button id="saveBtn">Save Grades</button>

<select class="grade-input" data-student="3">
<option value="4">A</option>
<option value="3">B</option>
</select>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$('#saveBtn').click(()=>{
 $.post('api/grades.php',{
  action:'save',
  grades:[{student_id:3,grade:4}]
 },()=>alert('Saved'));
});
</script>
