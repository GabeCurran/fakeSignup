let matrixAResult = document.querySelector('#matrixAResult');
    let matrixBResult = document.querySelector('#matrixBResult');

    let a1 = 0;
    let a2 = 0;
    let b1 = 0;
    let b2 = 0;

    let c1 = 0;
    let c2 = 0;
    let d1 = 0;
    let d2 = 0;

    function setMatrix() {
        a1 = Number(document.querySelector('#a1').value);
        a2 = Number(document.querySelector('#a2').value);
        b1 = Number(document.querySelector('#b1').value);
        b2 = Number(document.querySelector('#b2').value);
        
        c1 = Number(document.querySelector('#c1').value);
        c2 = Number(document.querySelector('#c2').value);
        d1 = Number(document.querySelector('#d1').value);
        d2 = Number(document.querySelector('#d2').value);
    };

    function matrixDeterminant() {
        setMatrix();
        matrixAResult.textContent = "Your answer is: " + ((a1 * b2) - (a2 * b1));
    }

    function matrixInverse() {
        setMatrix();
        
        let x1 = b2;
        let x2 = (a2 * -1);
        let y1 = (b1 * -1);
        let y2 = a1;

        let inverse = [
            [x1, x2],
            [y1, y2]
        ];
        
        matrixAResult.textContent = "Your answer is: " + inverse;
    };

    function matrixScalar() {
        setMatrix();

        let multiplier = Number(prompt("Input a number!"));

        let x1 = (a1 * multiplier);
        let x2 = (a2 * multiplier);
        let y1 = (b1 * multiplier);
        let y2 = (b2 * multiplier);

        let scalar = [
            [x1, x2],
            [y1, y2]
        ];
        
        matrixAResult.textContent = "Your answer is: " + scalar;
    };

    function matrixAdd() {
        setMatrix();

        let x1 = (a1 + c1);
        let x2 = (a2 + c2);
        let y1 = (b1 + d1);
        let y2 = (b2 + d2);

        let sum = [
            [x1, x2],
            [y1, y2]
        ];
        
        matrixBResult.textContent = "Your answer is: " + sum;
    };

    function matrixSubtract() {
        setMatrix();

        let x1 = (a1 - c1);
        let x2 = (a2 - c2);
        let y1 = (b1 - d1);
        let y2 = (b2 - d2);

        let difference = [
            [x1, x2],
            [y1, y2]
        ];
        
        matrixBResult.textContent = "Your answer is: " + difference;
    };

    function matrixMultiply() {
        setMatrix();

        let x1 = (a1 * c1);
        let x2 = (a2 * c2);
        let y1 = (b1 * d1);
        let y2 = (b2 * d2);

        let product = [
            [x1, x2],
            [y1, y2]
        ];
        
        matrixBResult.textContent = "Your answer is: " + product;
    };

    function matrixDivide() {
        setMatrix();

        let x1 = (a1 / c1);
        let x2 = (a2 / c2);
        let y1 = (b1 / d1);
        let y2 = (b2 / d2);

        let quotient = [
            [x1, x2],
            [y1, y2]
        ];
        
        matrixBResult.textContent = "Your answer is: " + quotient;
    };