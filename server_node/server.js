var io= require('socket.io')(80)
console.log('Connected to port 80')
io.on('error', function(socket){
    console.log('error')
})
io.on('connection', function(socket){
    console.log('Có người vừa kết nối' + socket.id)
})

var Redis = require('ioredis')
var redis = new Redis(1000)

redis.on('pmessage', function(partner, channel, message){
    console.log(channel)
    console.log(message)
    console.log(partner)
})