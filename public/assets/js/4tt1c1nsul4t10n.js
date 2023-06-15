const atticInsulationExtension = {
    methodElement: document.getElementById('selectMethod'),
    rvalueElement: document.getElementById('selectRValue'),
    squareFeetsElement: document.getElementById('inputSquareFeets'),
    listen: function () {
        this.methodElement.addEventListener('change', function () {
            console.log('Method changed!')
        })

        this.rvalueElement.addEventListener('change', function () {
            console.log('R-Value changed!')
        })

        this.squareFeetsElement.addEventListener('keydown', function () {
            console.log('Square feets changed!')
        })
    }
}

atticInsulationExtension.listen()