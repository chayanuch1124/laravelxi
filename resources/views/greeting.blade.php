<html>
/* สามารถปริ้นออกได้หลายแบบ */
<body>
    <h1>Hello, {{ $name }} </h1>
    <h2>Hello, <?php echo $name; ?> </h2>
    <h1>Hello, {{ $name }} {{ $last_name }} </h1>
    <h1>Hello, {{ $name . " " . $last_name }} </h1>
</body>

</html>