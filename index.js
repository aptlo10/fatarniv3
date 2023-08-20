const btn = document.getElementById('btn');

btn.addEventListener('click', function handleClick(event) {
  // 👇️ if you are submitting a form (prevents page reload)
  event.preventDefault();

  const name_ = document.getElementById('name_');

  // Send value to server
  console.log(name_.value);

  // 👇️ clear input field
  name_.value = '';
});