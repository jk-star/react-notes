# Chapter 14 – useRef() Hook ⭐

- `useState` UI update karta hai.
- `useRef` value store karta hai bina UI update kiye.

## 1. Problem Samjho
- Maan lo page load hote hi input me cursor aa jana chahiye.
- Jaise Google Search.
<code><pre>
Open Page
↓
Cursor Ready
</pre></code>

## 2. useRef Kya Hai?
- **useRef ek object return karta hai jo value ko store karta hai aur UI ko re-render nahi karta.**

## 3. Syntax
<code><pre>
import { useRef } from "react";

const inputRef = useRef(null);
</pre></code>

**useRef Return**

<code><pre>
inputRef
↓
{
   current: null
}
</pre></code>

- Current property me actual value store hoti hai.

## 4. Input Focus Example ⭐

<code><pre>
import { useRef } from "react";

function App() {

  const inputRef = useRef(null);

  function handleFocus() {
    inputRef.current.focus();
  }

  return (
    <>
      &lt;input
        ref={inputRef}
        type="text"
        placeholder="Enter Name"
      /&gt;

      <button onClick={handleFocus}>
        Focus Input
      </button>
    </>
  );
}

export default App;
</pre></code>

**Output**

<code><pre>
Click Button
↓
Cursor Input me aa jayega
</pre></code>

**Flow**

<code><pre>
Button
↓
inputRef.current
↓
focus()
↓
Cursor Ready
</pre></code>

## 5. useRef vs useState

| useState            | useRef                         |
| ------------------- | ------------------------------ |
| UI Update karta hai | UI Update nahi karta           |
| Re-render hota hai  | Re-render nahi hota            |
| UI Data ke liye     | DOM aur mutable values ke liye |

**Example**

<code><pre>
const [count, setCount] = useState(0);
const countRef = useRef(0);
</pre></code>

**State**

<code><pre>
Change
↓
UI Update
</pre></code>

**Ref**

<code><pre>
Change
↓
No UI Update
</pre></code>

## 6. Previous Value Store Karna
<code><pre>
import { useEffect, useRef, useState } from "react";

function App() {

  const [count, setCount] = useState(0);

  const previous = useRef(0);

  useEffect(() => {
    previous.current = count;
  }, [count]);

  return (
    &lt;&gt;
      &lt;h2&gt;Current : {count}&lt;/h2&gt;
      &lt;h2&gt;Previous : {previous.current}&lt;/h2&gt;
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

<code><pre>
Current : 5
Previous : 4
</pre></code>

## 7. Timer Store Karna

<code><pre>
const timerRef = useRef(null);

timerRef.current = setInterval(() => {
   console.log("Running...");
},1000);
</pre></code>

**Later**

`clearInterval(timerRef.current)`;

## Interview Questions

**Q1. useRef kisliye use hota hai?**
- DOM Access
- Mutable Value Store

**Q2. Kya useRef re-render karta hai?**
- ❌ Nahi.

**Q3. Input focus kaise karte hain?**

`inputRef.current.focus();`
