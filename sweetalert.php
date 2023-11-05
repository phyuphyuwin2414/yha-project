<html>
<head>
  <script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
  <form action="">
    Name
    <input type="text" id="name">
    <br>
    Age
    <input type="number" id="age">
    <br>
    <!-- Change type to "submit" -->
    <button type="submit" id="insert">Insert</button>
  </form>

  <script>
    $('#insert').click(function(e){
      e.preventDefault(); // Prevent the default form submission
      Swal.fire({
        icon: 'success',
        title: 'Inserted Successfully',
      })
    })
  </script>
</body>
</html>
