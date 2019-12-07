<script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.4"></script>
<script>
    $(function() {
        const search = instantsearch({
            appId: 'JVK4C1TMQ5',
            apiKey: '9899f245cb1594fbd508df7224308f42',
            indexName: 'cms_article',
            urlSync: true,
            searchFunction: function(helper) {
                var searchResults = $('#hits');
                if (helper.state.query === '') {
                    searchResults.hide();
                    return;
                }
                helper.search();
                searchResults.show();
            },
            searchParameters: {
                filters: 'lang_id:"{{ user_lang() }}" AND section_id:"academy" AND status_id:2'
            }
        });

        // initialize SearchBox
        search.addWidget(
            instantsearch.widgets.searchBox({
                container: '#search-box',
                placeholder: '{{ __('web.search_answers') }}...'
            })
        );

        // initialize hits widget
        search.addWidget(
            instantsearch.widgets.hits({
                container: '#hits',
                templates: {
                    empty: '{{ __('web.no_results') }} <a href="mailto:info@vinipad.com">info@vinipad.com</a>',
                    footer: document.getElementById('search-footer-template').innerHTML,
                    item: document.getElementById('hit-template').innerHTML
                }
            })
        );

        search.start();
    });
</script>

<script type="text/html" id="hit-template">
    <div class="hit">
        <div class="hit-content">
            <a href="{{ user_lang() }}-{{ user_country() }}/academy/article/@{{ slug }}">@{{{ _highlightResult.title.value }}}</a>
        </div>
    </div>
</script>

<script type="text/html" id="search-footer-template">
    <div class="footer">
        <a target="_blank" href="https://www.algolia.com/?utm_source=laravel&utm_medium=link&utm_campaign=laravel_documentation_search">
            <img width="105" src="{{ asset('images/web/search-by-algolia.svg') }}">
        </a>
    </div>
</script>