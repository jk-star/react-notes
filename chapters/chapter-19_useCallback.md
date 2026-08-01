# Chapter 19 – useCallback() ⭐
- useMemo value ko cache karta hai.
- useCallback function ko cache karta hai.

## Problem
- Har render me

`function handleClick() {}`

- New function ban jata hai.

<code><pre>
Render
↓
New Function
↓
Child Re-render
</pre></code>

**Solution**

``useCallback()``

**Syntax**

<code><pre>
const handleClick = useCallback(() => {

   console.log("Hello");

}, []);
</pre></code>

**Example**

<code><pre>
import { useCallback, useState } from "react";

function App() {

  const [count, setCount] = useState(0);

  const greet = useCallback(() => {
    console.log("Hello");
  }, []);

  return (
    &lt;&gt;
      &lt;h1&gt;{count}&lt;/h1&gt;
      &lt;button
        onClick={() => setCount(count + 1)}
      &gt;
        Count
      &lt;/button&gt;
      &lt;button
        onClick={greet}
      &gt;
        Greet
      &lt;/button&gt;
    &lt;/&gt;
  );
}
</pre></code>

## useMemo vs useCallback

| useMemo                | useCallback               |
| ---------------------- | ------------------------- |
| Value cache karta hai  | Function cache karta hai  |
| Returns value          | Returns function          |
| Expensive calculations | Stable function reference |

## Interview Questions

**Q1. useCallback kya return karta hai?**
- Cached Function.

**Q2. Difference?**

<code><pre>
useMemo
↓
Value

useCallback
↓
Function
</pre></code>


## 🎯 Easy Memory Trick

| Hook          | Yaad Rakhne Ki Trick              |
| ------------- | --------------------------------- |
| `useState`    | UI Data Store                     |
| `useEffect`   | Side Effects                      |
| `useRef`      | DOM / Mutable Value               |
| `useMemo`     | **Memo = Memory of Value**        |
| `useCallback` | **Callback = Memory of Function** |
