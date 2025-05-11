<html lang="en">
<head>
    <title> Sistem Mahasiswa </title>
 <style> 
    .container img { 
        max-width: 150px;
        margin-bottom: 20px;
        border-radius: 12px;
        display: block;
        margin-left: auto;
        margin-right: auto; }
    .container h2 {
        margin-bottom: 15px;
        font-size: 3rem; /* Memperbesar teks Student Link */
        font-weight: bold;
        text-align: center;}
    .container input[type="text"], 
    .container input[type="password"] {
        width: 50%; /*ukuran kotak form*/ 
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 12px;
        border: 1px solid #ddd;
        font-size: 1rem;
        display: block;
        margin: 0 auto;}
    .container label {
        font-size: 2rem;  /* Mengubah ukuran Username dan Password */
        display: block;
        text-align: center;  /* Menengahkan teks */
        margin-bottom: 10px;
        width: 100%;
        color: white; }  /* Agar lebih jelas di background biru */
    .container input[type="submit"] {
        background-color: blue;
        color: white;
        padding: 10px;
        width: 100%;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 2rem;
        display: block;
        margin: 0 auto;}
    .container input[type="submit"]:hover {
        background-color:blue;}
    </style>

</head>
<body bgcolor="blue">
<form action="inputmahasiswa.php" method="post">
<div class="container">
    <img src="20.png" alt="Logo Universitas PGRI Wiranegara">
    <h2>Student Link</h2>
    <form action="process_login.php" method="post">
    <label>Username:</label>
    <input type="text" name="Username" maxlength="50">
        
    <label>Password:</label>
    <input type="password" name="Password" maxlength="50">  
    <input type="submit" value="Submit">
</form>
</div> 

</body>
</html>