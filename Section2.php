<!DOCTYPE html>
<html>

<head>
    <style>
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <h2>Form HTMl</h2>

    <form>
        <label for="fname">Name</label>
        <input type="text" id="fname">
        <label for="lname">Email</label>
        <input type="text" id="lname">
        <div>
            <label for="lname">Gender</label>
            <div>
                <input type="radio" id="huey" name="Gender" value="Male" checked required />
                <label for="huey">Male</label>
            </div>

            <div>
                <input type="radio" id="dewey" name="Gender" value="Female" />
                <label for="dewey">Female</label>
            </div>

            <div>
                <input type="radio" id="louie" name="Gender" value="Other" />
                <label for="louie">Other</label>
            </div>
        </div>
        <label for="lname">Hobbies</label>
        <div>
            <input type="checkbox" id="vehicle1" name="Hobbies" value="Bike" checked>
            <label for="vehicle1"> Eat </label><br>
            <input type="checkbox" id="vehicle2" name="Hobbies" value="Car">
            <label for="vehicle2"> Sleep </label><br>
            <input type="checkbox" id="vehicle3" name="Hobbies" value="Boat">
            <label for="vehicle3"> Play game</label><br><br>
        </div>

        <label for="lname">Bio</label>
        <div>
            <textarea id="w3review" name="Bio" rows="4" cols="50" required></textarea>
        </div>

        <input type="submit">
    </form>

</body>

</html>