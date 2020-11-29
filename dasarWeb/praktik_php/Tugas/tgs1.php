<!DOCTYPE HTML>
<html>
    <link rel="stylesheet" type="text/css" href="tgs1.css">
    <head></head>
    <body>
        <header>
        <div class="header">
            <h1>Tugas Nomor 1</h1>
        </div>
        <div class="header1">
            <a href="home.html">Back</a>
        </div>
    </header>

        <script>
            var umur = prompt("Masukkan Umur Anda : ",0);
            if(umur >=0 && umur <= 5){
                document.write("<b>Balita</b>");
            }else if(umur >5 && umur <= 15 ){
                document.write("<b>Kanak Kanak</b>")
            }else if(umur >15 && umur <= 25 ){
                document.write("<b>Remaja</b>")
            }else if(umur >25 && umur <= 60){
                document.write("<b>Dewasa</b>")
            }else if(umur > 60){
                document.write("<b>Lansia</b>")
            }else{
                document.write("<b>Error Age.</b>")
            }
        </script>
    <footer>
        <div class="footer">
            <h1 style="text-align: center;">
                Copyright by AldiRhezaldi &copy; 2019</h1>
        </div>
    </footer>
    </body>
</html>