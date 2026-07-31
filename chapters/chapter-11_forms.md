# Chapter 11 – Forms & Controlled Components ⭐⭐⭐⭐⭐

## 1. Form Kya Hai?
- User se information lene ke liye Form use hota hai.

**Examples:**

1. Login Form
1. Registration Form
1. Contact Form
1. Search Box
1. Feedback Form

## 2. React me Form Kaise Handle Hota Hai?

**Normal HTML me:**

``<input type="text">``

- React me sirf input banana kaafi nahi hai.
- React chahta hai ki input ki value State me rahe.
- Isliye React me hum use karte hain:

    - value
    - onChange
    - useState

## 3. Controlled Component Kya Hai?
- Jis input ki value React State control karti hai, usse Controlled Component kehte hain.

**Flow:**

<code><pre>
User Type

↓

onChange

↓

State Update

↓

value

↓

Input Update
</pre></code>

## 4. Pehla Controlled Input

<code><pre>
import { useState } from "react";

function App() {

  const [name, setName] = useState("");

  return (
    &lt;&gt;
      &lt; input
        type="text"
        placeholder="Enter Name"
        value={name}
        onChange={(e) => setName(e.target.value)}
      /&gt;
      &lt;h2&gt;Hello {name}&lt;/h2&gt;
    &lt;/&gt;
  );
}

export default App;
</pre></code>

**Output**

Enter Name

Hello

## 5. value Aur onChange Ka Relation
<code><pre>
&lt;input
  value={name}
  onChange={(e) => setName(e.target.value)}
/&gt;
</pre></code>

- ``value`` Batata hai input me kya dikhana hai.
- ``onChange`` Batata hai user ne kya type kiya.
- 👉 Dono saath me hi use hote hain.

## 6. Password Input

<code><pre>
import { useState } from "react";

function App() {

  const [password, setPassword] = useState("");

  return (
    &lt;&gt;
      <input
        type="password"
        placeholder="Password"
        value={password}
        onChange={(e) => setPassword(e.target.value)}
      /&gt;
      &lt;p&gt;Password Length: {password.length}&lt;/p&gt;
    &lt;/&gt;
  );
}
</pre></code>

## 7. Multiple Inputs

<code><pre>
import { useState } from "react";

function App() {

  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  return (
    &lt;&gt;
      &lt;input
        type="email"
        placeholder="Email"
        value={email}
        onChange={(e) => setEmail(e.target.value)}
      /&gt;
      &lt;br/&gt; &lt;br/&gt;
      &lt;input
        type="password"
        placeholder="Password"
        value={password}
        onChange={(e) => setPassword(e.target.value)}
      /&gt;
      &lt;hr/&gt;
      &lt;h3&gt;Email: {email}&lt;/h3&gt;
      &lt;h3&gt;Password: {password}&lt;/h3&gt;
    &lt;/&gt;
  );
}

export default App;
</pre></code>

## 8. Form Submit

<code><pre>
function handleSubmit(e) {

  e.preventDefault();

  alert("Form Submitted");
}

&lt;form onSubmit={handleSubmit}&gt;

  &lt;button&gt;
    Login
  &lt;/button&gt;

&lt;/form&gt;
</pre></code>

## 9. Basic Validation

<code><pre>
function handleSubmit(e) {

  e.preventDefault();

  if (email === "" || password === "") {
    alert("Please fill all fields");
    return;
  }

  alert("Login Successful");
}
</pre></code>

**Output**

``Please fill all fields``

``Login Successful``

## 10. Clear Form After Submit

<code><pre>
function handleSubmit(e) {

  e.preventDefault();

  alert("Submitted");

  setEmail("");
  setPassword("");
}
</pre></code>

## Interview Questions

**Q1. Controlled Component kya hota hai?**
- Jis input ko React State control karti hai.

**Q2. Input ki value kaise milti hai?**
- e.target.value

**Q3. Form reload kaise rokte hain?**
- e.preventDefault();

**Q4. Controlled Input me kaun se do props zaroor hote hain?**
- `value`
- `onChange`