<html>
    <head>
        <title>Sign Up</title>
    </head>
    <body>
        <form method="post" action="/store">
        @csrf
            <fieldset>
            <h1>Buat Account Baru!</h1>
            <h2>Sign Up Form</h2>
            <label for="first">First Name : <br/><br/></label>
            <input type="text" id="first"><br/><br/>
            <label for="last">Last Name : <br/><br/></label>
            <input type="text" id="last"><br/><br/>


            <label>Gender: <br><br></label>
            <input type="radio" name="gender" value="0">Male <br>
            <input type="radio" name="gender" value="1">Famel <br>
            <input type="radio" name="gender" value="2">Other <br><br>

            <label>Nationality: <br><br></label>
            <select>
                <option>Indonesia</option>
                <option>Singapore</option>
                <option>Malaysia</option>
            </select><br><br>

            <label>Language Spoken: <br><br></label>
            <input type="checkbox" name="language">Bahasa Indonesia <br>
            <input type="checkbox" name="language">Bahasa English <br>
            <input type="checkbox" name="language">Bahasa Other <br><br>

            <label for="bio">Bio: <br><br></label>
            <textarea id="bio" cols="30" rows="10"></textarea><br><br>
            <input type="submit" value="Sign Up">
        </fieldset>
        </form>
    </body>
</html>