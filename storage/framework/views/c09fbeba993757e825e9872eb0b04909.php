<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>keynotes| JURSE 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
 <style>
  
  body {
            font-family: 'figtree', sans-serif;
            margin: 0;
        }

        .navbar a {
            float: left;
            display: block;
            color: #263170;
            text-align: center;
            padding: 14px 12px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
            font-size: 14px;
            margin: 0 4px;
        }

        .navbar a:hover {
            background-color: white;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 14px;
    font-weight: bold;
    border: none;
    outline: none;
    color: #263170;
    padding: 14px 12px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
    position: relative;
        }

        .navbar a, .dropdown:hover .dropbtn {
            background-color: white;
        }

        .dropdown-content {
             display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    z-index: 15; /* Make sure this value is higher than other elements */
    font-size: 14px;
    font-weight: bold;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }
       


        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown .dropbtn::after {
    content: '\25BC'; /* Unicode downward arrow character */
    font-size: 10px;
    margin-left: 5px; /* Adjust the spacing */
}

        @media (max-width: 768px) {
            .navbar a, .dropdown .dropbtn {
                float: none;
                width: 100%;
                text-align: left;
            }
        }

        .custom-table {
            width: 500px;
            margin: auto; /* Center the table horizontally */
        }
        .custom-form {
            max-width: 700px;
            margin: auto;
            border: 1px solid #ddd; /* Border color */
            padding: 20px; /* Add padding for spacing inside the form */
            background-color: #f8f9fa; /* Soft background color */
            border-radius: 10px; /* Optional: Add rounded corners */
        }
    </style>
  </head>
  
   
    <form action="" method="POST" class="custom-form" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <?php echo csrf_field(); ?>

  <div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" >
    
  </div>
  <div class="mb-3">
    <label for="des" class="form-label">Description</label>
    <input type="text" class="form-control" id="des" name="des" >
  </div>
  <div class="mb-3">
  <label class="form-label" for="link">Site web</label>
  <input type="text" class="form-control" id="siteweb" name="siteweb" >
  </div>

  <div class="input-group">
  <input type="file" class="form-control" id="image"  name="image" >
 
</div>
    </br></br>

  <button type="submit" class="btn btn-primary">Ajouter </button> <a  href="/index " class= "btn btn-primary"> Annuler</a>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\jur\resources\views/keynotespeaker/Ajout.blade.php ENDPATH**/ ?>