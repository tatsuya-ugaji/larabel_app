<script type="text/javascript">
function change_bpflg(){
    var  bp_flg = document.getElementById('bp_flg').value;
    var categories = document.getElementById('category');
    var category = '{!! $category !!}';
    category = JSON.parse(category);
    var param = '{!! $param !!}'
    console.log(param);
    if (param != "") {
        param = JSON.parse(param);
    }
    console.log(param['category']);
    if (bp_flg == 0) {
        while (categories.lastChild) {
            categories.removeChild(categories.lastChild);
        }
        for (var i = 0; i < category.length; i++) {
            if (category[i].bp_flg == 0) {
                var op = document.createElement("option");
                op.value = category[i].name;
                op.text = category[i].name;
                categories.appendChild(op);
                if (param != "") {
                    if (param['category'] == category[i].name){
                        categories.lastChild.selected = true;
                    }
                }
            }
        }
    } else {
        while (categories.lastChild) {
            categories.removeChild(categories.lastChild);
        }
        for (var i = 0; i < category.length; i++) {
            if (category[i].bp_flg == 1) {
                var op = document.createElement("option");
                op.value = category[i].name;
                op.text = category[i].name;
                categories.appendChild(op);
                if (param != "") {
                    if (param['category'] == category[i].name){
                        categories.lastChild.selected = true;
                    }
                }
            }
        }
    }
}
window.onload = change_bpflg;
</script>
