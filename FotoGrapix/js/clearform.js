// const form = document.getElementById('my_form');

// form.addEventListener('submit', function handleSubmit(event) {
//   event.preventDefault();

//   // 👇️ Send data to the server here

//   // 👇️ Reset the form here
//   form.reset();
// });

const btnClear = document.getElementById('btn_clear');

btnClear.addEventListener('click', function handleClick(event) {
  // 👇️ if you are submitting a form
  event.preventDefault();

  const inputs = document.querySelectorAll('#f_name, #email_add, #phone_no, #msg');

  inputs.forEach(input => {
    input.value = '';
  });
});
