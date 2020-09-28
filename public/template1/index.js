(function() {

    var USE_CONTENTEDITABLE = !('designMode' in document);

    // Source https://stackoverflow.com/questions/494143/creating-a-new-dom-element-from-an-html-string-using-built-in-dom-methods-or-pro
    function htmlToElement(html) {
        var documentFragment = document.createDocumentFragment();
        var template = document.createElement('template');
        template.innerHTML = html.trim();
        for (var i = 0, e = template.content.childNodes.length; i < e; i++) {
            documentFragment.appendChild(template.content.childNodes[i].cloneNode(true));
        }
        return documentFragment;
    }

    function supportsLocalStorage() {
        if (!('localStorage' in window)) return false;
        try {
            localStorage.setItem('test', 'true');
            localStorage.getItem('test');
            localStorage.removeItem('test');
            return true;
        } catch (e) {
            return false;
        }
    }

    function supportsTemplate() {
        return ('content' in document.createElement('template'));
    }

    var hasLocalStorage = supportsLocalStorage();
    var hasTemplate = supportsTemplate();

    function savePage() {
        localStorage.setItem('page', escape(document.getElementById('save').innerHTML));
    }

    function getSavedPage() {
        var pageStr = localStorage.getItem('page');
        if (!(pageStr && pageStr.length)) return null;
        return unescape(pageStr);
    }

    function restoreSavedPage() {
        var savedPage = getSavedPage();
        if (savedPage) {
            document.getElementById('save').innerHTML = savedPage;
        }
    }

    // Source https://stackoverflow.com/questions/13405129/javascript-create-and-save-file
    

    function getButtonActions() {
        return {
            'clear': function(e) {
                requestAnimationFrame(function() {
                    if (hasLocalStorage) {
                        localStorage.clear();
                        location.reload();
                    }
                });
            },
            'print': function(e) {
                requestAnimationFrame(function() {
                    window.print();
                });
            },
            'save': function(e) {
                updateMetadata();
                var pageStr = getPageContents();
                download(pageStr, 'resume.html', 'text/html; charset=UTF-8');
            },
            'addPage': function(e) {
                addPage();
                updatePageNumbers();
            }
        };
    }

    function addDocumentControls() {
        if (!hasTemplate) return false;
        var docControlsStr =
            `<!-- Document control buttons-->
            <div id="document-controls">
                <button data-action="clear" title="Remove saved draft">Clear draft</button>
                <button data-action="print" title="Print">Print</button>
            </div>`;
        var docControls = htmlToElement(docControlsStr);
        document.body.appendChild(docControls);
        return true;
    }

    function bindDocumentControls() {
        var actions = getButtonActions();
        var docControls = document.getElementById('document-controls');
        if (!docControls) return false;
        var buttons = docControls.querySelectorAll('button[data-action]');
        for (var i = 0, e = buttons.length; i < e; i++) {
            if (buttons[i].dataset.action in actions) {
                buttons[i].addEventListener('click', actions[buttons[i].dataset.action]);
            }
        }
        return true;
    }

    function execCommand(commandName) {
        if ('execCommand' in document) {
            if (!queryCommandSupported(commandName)) return false;

            try {
                return document.execCommand(commandName, false, null);
            } catch(e) {
                return false;
            }
        }

        return false;
    }

    function queryCommandSupported(commandName) {
        if ('queryCommandSupported' in document) {
            return document.queryCommandSupported(commandName);
        }

        return false;
    }

    function bindMutationObserver() {
        if (!('MutationObserver' in window) || !hasLocalStorage) return;

        function onMutate(mutations) {
            requestAnimationFrame(savePage);
        }

        var observer = new MutationObserver(onMutate);

        var config = {
            childList: true,
            characterData: true,
            subtree: true
        };

        observer.observe(document.body, config);
    }
 

    function updatePageNumbers() {
        var pages = document.querySelectorAll('.sheet');
        for (var i = 0, e = pages.length; i < e; i++) {
            pages[i].setAttribute('data-page-number', i + 1);
        }
        document.body.setAttribute('data-page-count', pages.length);
    }

    

    // Metadata

    function updateMetadata() {
        updateMetaDate();
        updateMetaSubject();
        updateMetaAuthor();
        updateMetaKeywords();
        updateTitle();
    }
 
   

    if (hasLocalStorage) {
        restoreSavedPage();
        addDocumentControls();
        bindDocumentControls();
    }

    updatePageNumbers();
    requestAnimationFrame(bindMutationObserver);
})();