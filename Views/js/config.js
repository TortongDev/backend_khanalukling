document.addEventListener('DOMContentLoaded', function(){
    document.querySelector('.ql-editor').removeAttribute('contenteditable')
    document.querySelector('[data-formula="e=mc^2"]').computedStyleMap.display = 'none'
})