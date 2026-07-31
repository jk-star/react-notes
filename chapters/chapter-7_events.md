# Chapter 7 - Events

## React Event Kya Hai?
- User jo bhi action karta hai use Event kehte hain.

**Examples:**

- Button click
- Input me typing
- Mouse hover
- Form submit
- Keyboard press

## Event Types

| User Action  | React Event   |
| ------------ | ------------- |
| Button Click | `onClick`     |
| Input Typing | `onChange`    |
| Form Submit  | `onSubmit`    |
| Mouse Hover  | `onMouseOver` |
| Key Press    | `onKeyDown`   |


## 1. onClick Event

**Example**

<code><pre>
function App() {

  function hello() {
    alert("Hello React");
  }

  return (
    &lt;button onClick={hello}>
      Click Me
    &lt;/button&gt;
  );

}

export default App;
</pre></code>

**Output:**

<code><pre>
Button

↓

Click

↓

Alert

Hello React
</pre></code>

## 2. Arrow Function
- Kabhi-kabhi direct function nahi banana hota.
<code><pre>
&lt;button onClick={() => alert("Hello")} &gt;
  Click
&lt;/button&gt;
</pre></code>

**Output**

``Hello``

## 3. Multiple Statements
<code><pre>
&lt;button
  onClick={() => {
    alert("Welcome");
    console.log("React");
  }}
&gt;
  Click
&lt;/button&gt;
</pre></code>

## 4. Variable Pass Karna

<code><pre>
function greet(name) {
  alert(name);
}

&lt;button
  onClick={() => greet("Jyoti")}
&gt;
  Click
&lt;/button&gt;
</pre></code>

**Output**

`jyoti`

## 5. Input Event

<code><pre>
function App() {

  function typing() {
    console.log("Typing...");
  }

  return (
    &lt;input
      type="text"
      onChange={typing}
    /&gt;
  );

}
</pre></code>

## 6. Form Submit
<code><pre>
function save(e) {

  e.preventDefault();

  alert("Form Submitted");

}

&lt;form onSubmit={save}>

  &lt;button&gt; Submit &lt;/button&gt;

&lt;/form&gt;
</pre></code>


## Interview Questions
**Q1. React me button click ka event kaunsa hai?**
- onClick

**Q2. Input typing ke liye?**
- onChange

**Q3. Form reload rokne ke liye?**
- e.preventDefault();

**Q4. Event object se input value kaise milegi?**
- e.target.value