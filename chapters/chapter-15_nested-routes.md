# Chapter 15 – Nested Routes & Layouts ⭐

## 1. Problem Samjho
- Maan lo tumhare paas 3 pages hain.
<code><pre>
Home

Products

Users
</pre></code>

- Teeno pages me same API call likhi hui hai.

**Home.jsx**

<code><pre>
useEffect(() => {
   fetch(...)
}, []);
</pre></code>

**Products.jsx**

<code><pre>
useEffect(() => {
   fetch(...)
}, []);
</pre></code>

**Users.jsx**

<code><pre>
useEffect(() => {
   fetch(...)
}, []);
</pre></code>

- Same code baar-baar likhna pad raha hai.

**Solution**

- Ek baar logic likho.
- Har jagah use karo.
- Yehi Custom Hook hai.

## 2. Custom Hook Kya Hai?
- Custom Hook ek normal JavaScript function hota hai jo React Hooks ka use karta hai aur reusable logic return karta hai.

<code><pre>
Component
↓
UI Reuse
Custom Hook
↓
Logic Reuse
</pre></code>

**Real Life Example**
- Suppose tumhare ghar me washing machine hai.
<code><pre>
Kapde
↓
Machine
↓
Clean Clothes
</pre></code>

- Har baar haath se kapde nahi dhote.
- Machine reuse karte ho.
- Custom Hook bhi reusable machine ki tarah hai.

## 3. Naming Rule ⭐
- Har Custom Hook ka naam
- `use` se start hona chahiye.

**Examples**

<code><pre>
useFetch
useAuth
useLocalStorage
useCounter
useTheme
</pre></code>

**❌ Wrong**

`fetchData`

**✅ Correct**

`useFetch`

## 4. Folder Structure

- Professional Projects

<code><pre>
src
│
├── hooks
│   ├── useCounter.js
│   ├── useFetch.js
│   ├── useLocalStorage.js
│
├── pages
├── components
└── App.jsx
</pre></code>

- Companies me hooks ke liye alag folder banana common practice hai.

## 5. First Custom Hook

**`hooks/useCounter.js`**

<code><pre>
import { useState } from "react";

function useCounter() {

  const [count, setCount] = useState(0);

  function increment() {
    setCount(count + 1);
  }

  function decrement() {
    setCount(count - 1);
  }

  function reset() {
    setCount(0);
  }

  return {
    count,
    increment,
    decrement,
    reset
  };
}

export default useCounter;
</pre></code>

**Use the Hook**

**`App.jsx`**

<code><pre>
import useCounter from "./hooks/useCounter";

function App() {

  const {
    count,
    increment,
    decrement,
    reset
  } = useCounter();

  return (
    &lt;&gt;
      &lt;h1&gt;{count}&lt;/h1&gt;
      &lt;button onClick={increment}>+&lt;/button&gt;
      &lt;button onClick={decrement}>-&lt;/button&gt;
      &lt;button onClick={reset}>Reset&lt;/button&gt;
    &lt;/&gt;
  );
}

export default App;
</pre></code>

## 6. useFetch Hook ⭐
- Sabse popular Custom Hook.

`hooks/useFetch.js`

<code><pre>
import { useEffect, useState } from "react";

function useFetch(url) {

  const [data, setData] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState("");

  useEffect(() => {

    async function getData() {

      try {

        const response = await fetch(url);

        const result = await response.json();

        setData(result);

      } catch {

        setError("Something went wrong");

      } finally {

        setLoading(false);

      }

    }

    getData();

  }, [url]);

  return {
    data,
    loading,
    error
  };
}

export default useFetch;
</pre></code>

`App.jsx`
<code><pre>
import useFetch from "./hooks/useFetch";

function App() {

  const {
    data,
    loading,
    error
  } = useFetch(
    "https://jsonplaceholder.typicode.com/users"
  );

  if (loading)
    return &lt;h2&gt;Loading...&lt;/h2&gt;;

  if (error)
    return &lt;h2&gt;{error}&lt;/h2&gt;;

  return (
    &lt;&gt;
      {
        data.map((user) => (
          &lt;$h3 key={user.id}&gt;
            {user.name}
          &lt;/h3&gt;
        ))
      }
     &lt;/&gt;
  );
}

export default App;
</pre></code>

## 7. Kab Custom Hook Banana Chahiye?

- ✅ Jab same logic 2 ya usse zyada components me repeat ho.

**Examples**

1. API Calls
1. Authentication
1. Theme
1. LocalStorage
1. Window Size
1. Online/Offline Status

## Interview Questions

**Q1. Custom Hook kya hota hai?**
- Reusable logic wala function jo React Hooks use karta hai.

**Q2. Custom Hook ka naam kis se start hota hai?**

- ``use``

**Q3. Custom Hook ka benefit?**
1. Reusable logic
1. Clean code
1. Easy maintenance
1. Better testing

**Q4. Custom Hook aur Component me difference?**

| Component             | Custom Hook                  |
| --------------------- | ---------------------------- |
| UI return karta hai   | Logic return karta hai       |
| JSX hota hai          | JSX nahi hota                |
| Screen par dikhta hai | Background me kaam karta hai |
