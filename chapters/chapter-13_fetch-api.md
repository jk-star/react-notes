# Chapter 13– Fetch API & Display Data ⭐
## 1. API Kya Hai?
- API (Application Programming Interface) ek bridge hai jo do applications ke beech data exchange karwati hai.

## 2. Fetch API Kya Hai?
- JavaScript me internet se data lane ke liye use hota hai.

**Syntax**

``fetch("API_URL")``

## 3. Test API

Learning ke liye hum use karenge:

`https://jsonplaceholder.typicode.com/users`

- Ye ek free fake API hai.

## 4. Step 1 – State Banate Hain

<code><pre>
import { useState } from "react";
const [users, setUsers] = useState([]);
</pre></code>

## 5. Step 2 – useEffect

<code><pre>
useEffect(() => {

}, []);
</pre></code>

## 6. Step 3 – Fetch Data

<code><pre>
useEffect(() => {

  fetch("https://jsonplaceholder.typicode.com/users")
    .then((response) => response.json())
    .then((data) => {
      setUsers(data);
    });

}, []);
</pre></code>

## 7. Complete Example

<code><pre>
import { useEffect, useState } from "react";

function App() {

  const [users, setUsers] = useState([]);

  useEffect(() => {

    fetch("https://jsonplaceholder.typicode.com/users")
      .then((response) => response.json())
      .then((data) => {
        setUsers(data);
      });

  }, []);

  return (
    &lt;&gt;
      &lt;h1&gt;User List&lt;/h1&gt;
      {
        users.map((user) => (
          &lt;div key={user.id}>
            &lt;h2&gt;{user.name}&lt;h2&gt;
            &lt;p&gt;{user.email}&lt;/p&gt;
            &lt;hr /&gt;
          &lt;/div&gt;
        ))
      }
    &lt;/&gt;
  );

}

export default App;
</pre></code>

## 8. Loading State ⭐⭐⭐⭐⭐

**Problem:**

- API aane me 2–3 seconds lag sakte hain.
- Tab tak user ko kya dikhaye?

**Solution:**

`Loading...`

**Step 1**

`const [loading, setLoading] = useState(true);`

**Step 2**
- API complete hone ke baad

`setUsers(data);`

`setLoading(false);`

**Step 3**
<code><pre>
if (loading) {

  return &lt;h2&gt;Loading...&lt;/h2&gt;;

}
</pre></code>

## 9. Error Handling ⭐⭐⭐⭐⭐

- Kabhi internet nahi hota.
- Kabhi API fail ho jati hai.
- Tab app crash nahi hona chahiye.

**State**

`const [error, setError] = useState("");`

**Fetch**

<code><pre>
fetch(API)
  .then(res => res.json())
  .then(data => {
    setUsers(data);
  })
  .catch(() => {
    setError("Something went wrong");
  });
</pre></code>

**Show Error**

<code><pre>
if (error) {
  return &lt;h2&gt;{error}&lt;/h2&gt;;
}
</pre></code>

## 10. Professional Version

<code><pre>
import { useEffect, useState } from "react";

function App() {

  const [users, setUsers] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState("");

  useEffect(() => {

    fetch("https://jsonplaceholder.typicode.com/users")

      .then((res) => res.json())

      .then((data) => {

        setUsers(data);

        setLoading(false);

      })

      .catch(() => {

        setError("Failed to load users");

        setLoading(false);

      });

  }, []);

  if (loading) {
    return &lt;h2&gt;Loading...&lt;/h2&gt;;
  }

  if (error) {
    return &lt;h2&gt;{error}&lt;/h2&gt;;
  }

  return (
    &lt;&gt;
      &lt;h1&gt;Users&lt;h1&gt;
      {
        users.map((user) => (
          &lt;div key={user.id}>
            &lt;h2&gt;{user.name}&lt;/h2&gt;
            &lt;p&gt;{user.email}&lt;/p&gt;
            &lt;hr /&gt;
           &lt;/div&gt;
        ))
      }
    &lt;/&gt;
  );
}

export default App;
</pre></code>

## 11. Async/Await (Professional Style)
- Modern React projects me `.then()` se zyada async/await use hota hai.

**Same example:**

<code><pre>
useEffect(() => {

  async function getUsers() {

    try {

      const response = await fetch(
        "https://jsonplaceholder.typicode.com/users"
      );

      const data = await response.json();

      setUsers(data);

    } catch {

      setError("Failed to load users");

    } finally {

      setLoading(false);

    }

  }

  getUsers();

}, []);
</pre></code>

## Interview Questions

**Q1. React me API call kahan karte hain?**
- useEffect()

**Q2. API data store kahan karte hain?**
- `useState()`

**Q3. Loading state kyu use hoti hai?**
- API aane tak user ko feedback dene ke liye.

**Q4. Error handling kaise karte hain?**
<code><pre>
catch()
ya
try/catch
</pre></code>
