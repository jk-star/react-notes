# Chapter 12 – useEffect() Hook

## useEffect Kya Hai?

- ``useEffect()`` React me side effects ko handle karne ke liye use hota hai.

**Side Effect Kya Hota Hai?**

- Aisa kaam jo sirf UI dikhane ke alawa ho.

**Examples:**
- API Call
- LocalStorage
- Timer
- Document Title
- Event Listener

**Syntax**
<code><pre>
useEffect(() => {

  // Code

}, []);
</pre></code>

**Breakdown**
**Part 1**

<code><pre>
() => {

}
</pre></code>


**Part 2**

`[]`

- Isko Dependency Array kehte hain.
- Ye decide karta hai: `useEffect()` kab chalega?

## Empty Dependency Array []

<code><pre>
useEffect(() => {

  console.log("Run Once");

}, []);
</pre></code>

**Meaning**

- Run only once.
- Jab component first time load ho.
- Ye sabse common pattern hai.

## Without Dependency Array 

<code><pre>
useEffect(() => {

  console.log("Running");

});
</pre></code>

- Ab kya hoga?
- Har render par chalega.

## Specific Dependency

<code><pre>
import { useState, useEffect } from "react";

function App() {

  const [count, setCount] = useState(0);

  useEffect(() => {

    console.log("Count Changed");

  }, [count]);

  return (
    &lt;&gt;
      &lt;h1&gt;{count}&lt;/h1&gt;
      &lt;button
        onClick={() => setCount(count + 1)}
      &gt;
        +
      &lt;/button&gt;
    &lt;/&gt;
  );

}
</pre></code>

**Output**

`Count Changed`

- Sirf tab jab count change ho.

## Three Important Cases

| Syntax                         | Kab Chalega?                 |
| ------------------------------ | ---------------------------- |
| `useEffect(() => {})`          | Har render                   |
| `useEffect(() => {}, [])`      | Sirf first render            |
| `useEffect(() => {}, [count])` | Sirf `count` change hone par |


## Interview Questions 

**Q1. useEffect() kisliye use hota hai?**
- Side effects handle karne ke liye.

**Q2. Empty Dependency Array ([]) ka matlab?**
- Component load hone par sirf ek baar run kare.

**Q3. Dependency Array me count dene ka matlab?**
- count change hone par effect dobara chale.

**Q4. API call kahan karni chahiye?**
- `useEffect()` ke andar.