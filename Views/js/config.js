document.addEventListener('DOMContentLoaded', function(){
    document.querySelector('.ql-editor').setAttribute('contenteditable',false)
    document.querySelector('[data-formula="e=mc^2"]').computedStyleMap.display = 'none'
})