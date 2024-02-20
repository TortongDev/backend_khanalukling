<?php require_once dirname(__DIR__)."/App/CSRFProtect.php";  ?>

<form action="" method="post" class="w3-container">
  <input type="hidden" name="token" value="<?php echo $csrf->csrf(); ?>">
  <div class="form-group">
    <label for="topic">Topic</label>
    <input type="text" name="topic" id="topic" class="w3-input">
  </div>
  <div class="form-group">
    <label for="">Date Start</label>
    <input type="date" name="date_start" id="date_start" class="w3-input">
  </div>
  <div class="form-group">
    <label for="">Date End</label>
    <input type="date" name="date_end" id="date_end" class="w3-input">
  </div>
  <div class="form-group">
    <label for="">Type</label>
    <select name="content_type" id="content_type" class="w3-input">
      <option value="">----- เลือก -----</option>
      <option value="review">รีวิว</option>
      <option value="news">ข่าวสาร</option>
    </select>
  </div>
  <div class="form-group">
    <label for="">description</label>
    <input type="text" name="content_description" id="content_description" class="w3-input">
  </div>
  
  <div class="form-group">
    <div id="editor">
      <p>Hello World!</p>
      <p>Some initial <strong>bold</strong> text</p>
      <p><br /></p>
    </div>
  </div>
  <button type="submit">submit</button>
</form>

<script>
  const form = document.querySelector('form')
  form.addEventListener('submit', function(e){
    console.log(1);
    e.preventDefault();
    const formData = new FormData();
    formData.append('topic', document.querySelector('[name=topic]').value)
    formData.append('date_start', document.querySelector('[name=date_start]').value)
    formData.append('date_end', document.querySelector('[name=date_end]').value)
    formData.append('content_description', document.querySelector('[name=content_description]').value)
    formData.append('content_type', document.querySelector('[name=content_type]').value)
    formData.append('editor', document.querySelector('#editor').innerHTML)
    const fetchData = async () => {
      const response = await fetch('http://localhost/backend_khanalukling/api/post-content', {
        method: 'POST',
        body: formData
      });
      const data = await response.json();
      console.log(data);
    };
    fetchData();
  })
</script>
