<html>
    <body>
        <top>
            <h1>result page</h1>
            
                <?php
                    $SERVER ="localhost";
                    $username="root";
                    $password="";
                    $dbname="control";
                    $number;
                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(isset($_GET['forward']))
                   {
                        $query= "INSERT INTO `control`(`move`) VALUES ('forward')" ;

                        echo "forward";
                        $number=1;
                   }
                   $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(isset($_GET['backward']))
                   {
                        $query= "INSERT INTO `control`(`move`) VALUES ('forward')" ;
                        echo "backward";
                        $number=2;
                   }
                   $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(isset($_GET['left']))
                   {
                        $query= "INSERT INTO `control`(`move`) VALUES ('left')" ;
                        echo "left";
                        $number=3;

                   }
                   $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(isset($_GET['right']))
                   {
                        $query= "INSERT INTO `control`(`move`) VALUES ('right')" ;
                        echo "right";
                        $number=4;
                   }
                   

                   $run=mysqli_query($conn,$query)
                   
                   
                ?>
                <script>
                    var number = '<?=$number?>';
                    const { pipeline } = require("serialport");
                    var SerialPort = require('serialport');
                    const parsers = SerialPort.parsers;

                    const parser = new parsers.Readline({
                    delimiter: '\r\n'
                    });

                    var port = new SerialPort('COM7',{ 
                    baudRate: 9600,
                    dataBits: 8,
                    parity: 'none',
                    stopBits: 1,
                    flowControl: false
                    });

                    port.pipe(parser);
                    if (number=1)
                    {
                        poet.write("1");
                    }
                    if (number=2)
                    {
                        poet.write("2");
                    }
                    if (number=3)
                    {
                        poet.write("3");
                    }
                    if (number=4)
                    {
                        poet.write("4");
                    }
                    </script>
            </form>
        </top>

    </body>
</html>