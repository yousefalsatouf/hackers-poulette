$.ajax({
  type: 'POST',
  data: {
      param1: 100,
      param2: 200
  },
  dataType: 'json',
  url: '../../controllers/list.php',
  statusCode: {
      404: f_404,
      501: f_501
  },
  success: ajax_success,
  error: ajax_error,
  timeout: 2000
});

function ajax_success(data){
  console.log(data);
}

function f_404() {
  
}
function f_501() {
  
}
function ajax_error(erreur) {
  console.log(erreur);
}