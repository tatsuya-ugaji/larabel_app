function date_change(){
    var year = document.getElementById('year').value;
    if(document.getElementById('month')){
        var month = document.getElementById('month').value;
    }
    var protocol = location.protocol + '//';
    var host = location.hostname + '/';
    var str = location.pathname ;
    var ary = str.split('/');
    if (ary[1] == 'actual'){
        if (month == null){
            var path = 'actual/' + year;
        }else{
            var path = 'actual/' + year + '/' + month;
        }
    } else {
        var path = 'budget/' + year + '/' + month;
    }
    var url = protocol + host + path;
    console.log(url);
    document.location.href = url;
}
