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





var io = require('socket.io').listen(app);

io.on('connection', function(socket) {
    
    socket.on('move',function(data){
        
        console.log( data );
        
        port.write( data );
    
    });
    
});

app.listen(3000);