
<form action="" method="post" class="w3-container">
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
    <div id="editor1"></div>
  </div>
  <button type="submit">submit</button>
</form>

<script>
  
const quill = new Quill('#editor1', {
    theme: 'snow',
    modules: {
        toolbar: [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],
            ['link', 'image', 'video', 'formula'],
            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
            [{ 'list': 'ordered'}, { 'list': 'bullet' }, { 'list': 'check' }],
            [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
            [{ 'direction': 'rtl' }],                         // text direction
          
            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
          
            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }]
          ]
        
    }
  });

  const form = document.querySelector('form')
  form.addEventListener('submit', function(e){
    console.log(1);
    e.preventDefault();
    const formData = new FormData();
    let div = "<div class='content'>";
    let data = document.querySelector('#editor1').innerHTML.substring(46);
    const capsule = div+data;
    formData.append('topic', document.querySelector('[name=topic]').value)
    formData.append('date_start', document.querySelector('[name=date_start]').value)
    formData.append('date_end', document.querySelector('[name=date_end]').value)
    formData.append('content_description', document.querySelector('[name=content_description]').value)
    formData.append('content_type', document.querySelector('[name=content_type]').value)
    formData.append('editor', capsule)
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
