<?php
    class Circle
    {
        public $radius;
        public $diameter;
        public $area;
        public $patternRadius = '/^[1-9]{1,5}$/';

        public function validate()
        {
            if (isset($_POST['submit'])) {
                $this->radius = $_POST['radius'];
                if (empty($this->radius)) {
                    throw new Exception("radius is not empty");
                } else {
                    if (!preg_match($this->patternRadius, $this->radius, $matches)) {
                        throw new Exception("data input is positive number");
                    } else {
                        return $matches[0];
                    }
                }
            }
        }

        public function calculateDiameterCircle()
        {
            return $this->diameter = 2 * pi() * $this->radius;
        } 

        public function calculateAreaCircle()
        {
            return $this->area = $this->radius * $this->radius * pi();
        }
    }

    $circle = new Circle();

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Circle</title>
</head>
<body>
    <h1 style="color: green; margin-left: 40px;">Diameter, Circle area </h1>
    <form class="form-inline ml-5" method="post">
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">readius</label>
            <input type="text" class="form-control" name="radius" placeholder="radius">
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="submit">submit</button>
    </form>
    <div style="width: 230px; height:50px; background-color: #8FBC8F; margin-left: 80px;">
        <?php
            try {
                echo $circle->validate();
                echo $circle->calculateDiameterCircle() . '<br/>';
                echo $circle->calculateAreaCircle();
            } catch (Exception $e) {
                echo 'Message: ' . $e->getMessage();
            } 
        ?>
    </div>
</body>
</html>