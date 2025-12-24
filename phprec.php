I’ve **solved and rewritten *all PHP practicals (1–14)* in a clean, exam-ready format**, exactly as required for **BCA / PHP practical submission**.
You can **copy–paste directly** into your practical file or run them locally.

Below solutions are based strictly on your uploaded practical PDF 

---

## ✅ **PHP PRACTICALS – COMPLETE SOLUTIONS**

---

## **1. Demonstrate different variable types**

```php
<?php
$age = 20;          // Integer
$price = 99.50;    // Float
$name = "John";    // String
$isStudent = true; // Boolean

echo "Age: $age<br>";
echo "Price: $price<br>";
echo "Name: $name<br>";
echo "Student: $isStudent";
?>
```

---

## **2. Arithmetic operations**

```php
<?php
$a = 10;
$b = 5;

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b);
?>
```

---

## **3. Even or Odd**

```php
<?php
$num = 11;

if ($num % 2 == 0)
    echo "$num is Even";
else
    echo "$num is Odd";
?>
```

---

## **4. Largest of three numbers**

```php
<?php
$a = 10; 
$b = 25; 
$c = 18;

if ($a > $b && $a > $c)
    echo "$a is Largest";
elseif ($b > $a && $b > $c)
    echo "$b is Largest";
else
    echo "$c is Largest";
?>
```

---

## **5. Multiplication table**

```php
<?php
$num = 5;

for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = " . ($num * $i) . "<br>";
}
?>
```

---

## **6. Factorial using function**

```php
<?php
function factorial($n) {
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

echo "Factorial of 5 is " . factorial(5);
?>
```

---

## **7. Indexed, Associative & Multidimensional Arrays**

```php
<?php
$names = ["Amit", "Raj", "Kiran"];

$marks = ["Amit" => 90, "Raj" => 85];

$students = [
    ["Amit", 90],
    ["Raj", 85]
];

print_r($names);
echo "<br>";
print_r($marks);
echo "<br>";
print_r($students);
?>
```

---

## **8. Sort array (Ascending & Descending)**

```php
<?php
$numbers = [5, 2, 8, 1];

sort($numbers);
echo "Ascending: ";
print_r($numbers);

rsort($numbers);
echo "<br>Descending: ";
print_r($numbers);
?>
```

---

## **9. Insert data using PHP Form**

**db.php**

```php
<?php
$cn = mysqli_connect("localhost", "root", "", "bca");
?>
```

**insert.php**

```php
<form method="post">
Name: <input type="text" name="name">
Email: <input type="text" name="email">
<button type="submit" name="submit">Save</button>
</form>

<?php
include "db.php";

if(isset($_POST['submit'])) {
    $n = $_POST['name'];
    $e = $_POST['email'];

    mysqli_query($cn, "INSERT INTO students(name,email) VALUES('$n','$e')");
    echo "Record Inserted";
}
?>
```

---

## **10. Fetch records & display table**

```php
<?php
include "db.php";

$result = mysqli_query($cn, "SELECT * FROM students");

echo "<table border='1'>
<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
          </tr>";
}
echo "</table>";
?>
```

---

## **11. Edit & Update record**

```php
<?php
include "db.php";
$id = $_GET['id'];

$res = mysqli_query($cn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($res);
?>

<form method="post">
Name: <input type="text" name="name" value="<?= $row['name'] ?>">
Email: <input type="text" name="email" value="<?= $row['email'] ?>">
<button name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])) {
    $n = $_POST['name'];
    $e = $_POST['email'];

    mysqli_query($cn, "UPDATE students SET name='$n', email='$e' WHERE id=$id");
    echo "Record Updated";
}
?>
```

---

## **12. Delete record**

```php
<?php
include "db.php";
$id = $_GET['id'];

mysqli_query($cn, "DELETE FROM students WHERE id=$id");
echo "Record Deleted";
?>
```

---

## **13. Login & Session**

```php
<form method="post">
Username: <input type="text" name="u">
Password: <input type="password" name="p">
<button name="login">Login</button>
</form>

<?php
include "db.php";

if(isset($_POST['login'])) {
    $u = $_POST['u'];
    $p = $_POST['p'];

    $res = mysqli_query($cn,
        "SELECT * FROM users WHERE username='$u' AND password='$p'");

    if(mysqli_num_rows($res) > 0) {
        session_start();
        $_SESSION['user'] = $u;
        echo "Login Successful";
    } else {
        echo "Invalid Credentials";
    }
}
?>
```

---

## **14. Input validation & insert**

```php
<form method="post">
Name: <input type="text" name="name">
Email: <input type="text" name="email">
<button name="submit">Register</button>
</form>

<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if(empty($name) || empty($email)) {
        echo "All fields required!";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid Email!";
    } else {
        include "db.php";
        mysqli_query($cn,
          "INSERT INTO students(name,email) VALUES('$name','$email')");
        echo "Registration Successful";
    }
}
?>
```

---

### ✅ **If you want**

* 📄 **Single combined PDF**
* ✍️ **Viva questions + answers**
* 📚 **Theory explanation for each practical**
* 🧪 **Screenshots/output format for exam**

Just tell me 👍
