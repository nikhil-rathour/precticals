I’ve **solved the full practical file** you shared. Below is a **clean, ready-to-write solution** for **all 10 programs**, exactly suitable for **BCA 5th Sem – Machine Learning Fundamentals practicals**.
(Programs + brief explanation + expected output style)

---

## **1. Python Program for List**

**Program**

```python
# Creating a list
fruits = ["Apple", "Banana", "Cherry", "Date"]

# Accessing elements
print("First fruit:", fruits[0])

# Modifying list
fruits[1] = "Blueberry"

# Adding element
fruits.append("Elderberry")

# Slicing
print("Subset:", fruits[1:3])

# Looping through list
print("Final List:")
for fruit in fruits:
    print(fruit)
```

**Output**

```
First fruit: Apple
Subset: ['Blueberry', 'Cherry']
Final List:
Apple
Blueberry
Cherry
Date
Elderberry
```



---

## **2. Python Program for Tuple**

**Program**

```python
# Creating a tuple
colors = ("Red", "Green", "Blue")

# Accessing elements
print("First color:", colors[0])

# Looping through tuple
for color in colors:
    print(color)
```

**Output**

```
First color: Red
Red
Green
Blue
```



---

## **3. Python Program for Dictionary**

**Program**

```python
student = {
    "name": "John Doe",
    "age": 21,
    "course": "Computer Science"
}

print("Student Name:", student["name"])

student["grade"] = "A"
student["age"] = 22

print("Student Details:")
for key, value in student.items():
    print(key, ":", value)
```

**Output**

```
Student Name: John Doe
Student Details:
name : John Doe
age : 22
course : Computer Science
grade : A
```



---

## **4. Load Student Data (Dictionary) into DataFrame**

**Program**

```python
import pandas as pd

student_dict = {
    "Roll_No": [101, 102, 103, 104],
    "Name": ["Alice", "Bob", "Charlie", "David"],
    "Marks": [85, 90, 78, 88]
}

df = pd.DataFrame(student_dict)
print(df)
```

**Output**

```
   Roll_No     Name  Marks
0      101    Alice     85
1      102      Bob     90
2      103  Charlie     78
3      104    David     88
```



---

## **5. Load Data from CSV to DataFrame**

**Program**

```python
import pandas as pd

data = {
    "Product": ["Laptop", "Mouse", "Keyboard"],
    "Price": [50000, 500, 1000]
}

pd.DataFrame(data).to_csv("products.csv", index=False)

df = pd.read_csv("products.csv")
print(df)
```

**Output**

```
    Product  Price
0    Laptop  50000
1     Mouse    500
2  Keyboard   1000
```



---

## **6. Data Pre-processing Demonstration**

**Program**

```python
import pandas as pd
import numpy as np
from sklearn.impute import SimpleImputer
from sklearn.preprocessing import StandardScaler

data = {
    "Age": [25, 30, np.nan, 35, 40],
    "Salary": [50000, 60000, 55000, np.nan, 70000]
}

df = pd.DataFrame(data)
print("Original Data:\n", df)

imputer = SimpleImputer(strategy="mean")
df_filled = pd.DataFrame(imputer.fit_transform(df), columns=df.columns)

scaler = StandardScaler()
df_scaled = pd.DataFrame(scaler.fit_transform(df_filled), columns=df.columns)

print("\nPre-processed Data:\n", df_scaled)
```



---

## **7. Linear Regression (House Price Prediction)**

**Program**

```python
import numpy as np
from sklearn.linear_model import LinearRegression

X = np.array([[1000], [1500], [2000], [2500], [3000]])
y = np.array([200000, 300000, 400000, 500000, 600000])

model = LinearRegression()
model.fit(X, y)

prediction = model.predict([[1800]])
print("Predicted price:", prediction[0])
```

**Output**

```
Predicted price: 360000
```



---

## **8. Logistic Regression (Buy/Sell Signal)**

**Program**

```python
import numpy as np
from sklearn.linear_model import LogisticRegression

X = np.array([[-5], [-2], [0.5], [2], [5]])
y = np.array([1, 1, 0, 0, 0])

model = LogisticRegression()
model.fit(X, y)

prediction = model.predict([[-3]])
result = "Buy" if prediction[0] == 1 else "Sell"
print("Prediction:", result)
```

**Output**

```
Prediction: Buy
```



---

## **9. Decision Tree Regression (Ice Cream Sales)**

**Program**

```python
import numpy as np
from sklearn.tree import DecisionTreeRegressor

X = np.array([[20], [25], [30], [35], [40]])
y = np.array([200, 300, 500, 700, 900])

model = DecisionTreeRegressor()
model.fit(X, y)

pred = model.predict([[32]])
print("Predicted Sales:", pred[0])
```

**Output**

```
Predicted Sales: 500
```



---

## **10. KNN Algorithm (Weather Forecast)**

**Program**

```python
import numpy as np
from sklearn.neighbors import KNeighborsClassifier

X = np.array([[15,90], [20,85], [25,40], [30,30], [35,20]])
y = np.array(["Rainy", "Rainy", "Sunny", "Sunny", "Sunny"])

knn = KNeighborsClassifier(n_neighbors=3)
knn.fit(X, y)

prediction = knn.predict([[18, 88]])
print("Weather Forecast:", prediction[0])
```

**Output**

```
Weather Forecast: Rainy
```



---

### ✅ If you want:

* **PDF format**
* **Handwritten-style explanation**
* **Viva questions from this practical**
* **Short theory for each program**

Just tell me 👍
