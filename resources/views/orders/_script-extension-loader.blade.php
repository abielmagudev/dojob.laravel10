<script>
const selectJob = {
    element: document.getElementById('selectJob'),
    listen: function () {
        this.element.addEventListener('change', function (evt) {
            loader.get(this.value)
        })
    }
}

const loader = {
    route: "<?= route('extensions.loader') ?>",
    spinner: {
        element: document.getElementById("loadingSpinner"),
        show: function () {
            this.element.classList.replace('d-none', 'd-block')
        },
        hide: function () {
            this.element.classList.replace('d-block', 'd-none')
        }
    },
    get: function (job_id) {
        this.spinner.show()

        fetch(this.route, {
            method: 'post',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': "<?= csrf_token() ?>"
            },
            body: JSON.stringify({
                job: job_id,
                method: 'create'
            })
        })
        .then( response => response.json() )
        .then( json => extensionsContainer.draw(json.templates) )

       this.spinner.hide() 
    }
}

const extensionsContainer = {
    element: document.getElementById('extensionsContainer'),
    draw: function (templates) {

        if( templates.length )
        {
            this.show()
        }
        else
        {
            this.hide()
        }

        this.clean
        
        let domain = "<?= url('assets/js') ?>"
        let templates_cache = [];
        templates.forEach(function (item) {
            templates_cache.push(item.template)
            
            let source = domain + '/' + item.script
            if( item.script &&! document.querySelector(`script[src="${source}"]`) )
            {
                let script = document.createElement('script')
                script.src = source
                script.async = true
                document.body.appendChild(script)
            }
        })

        this.element.innerHTML = templates_cache.join('<hr class="mt-3 mb-4">')
    },
    clean: function () {
        this.element.empty;
    },
    show: function () {
        this.element.classList.replace('d-none', 'd-block')
    },
    hide: function () {
        this.element.classList.replace('d-block', 'd-none')
    }
}

selectJob.listen()

</script>
