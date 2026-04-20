<h3>My Grades</h3>
<script>
fetch('api/gpa.php')
.then(r=>r.json())
.then(d=>console.log(d));
</script>
