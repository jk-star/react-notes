# Chapter 4 - JSX (JavaScript XML)

## 1. JSX Kya Hai?

**JSX = JavaScript + HTML**
- React me hum HTML jaisa code JavaScript ke andar likhte hain.

**Example:**
<code><pre>
function App() {
    return <h1>Hello React</h1>;
}
</pre></code>

- Ye dekhne me HTML lag raha hai.

**Lekin...**
- ❌ Ye HTML nahi hai.
- ✅ Ye JSX hai.

## 2. JSX ko Browser samajhta hai?

- ❌ Nahi.
**Browser sirf:**

    - HTML
    - CSS
    - JavaScript

- samajhta hai.
- Isliye Vite/Babel JSX ko JavaScript me convert karta hai.

**Flow:**

<code><pre>
JSX

↓

JavaScript

↓

Browser
</pre></code>

## 3. JSX HTML jaisa hai...

- ...lekin HTML nahi hai.


## JSX Rule 1
**Sirf ONE Parent Element Return hoga**

**❌ Wrong**

<code><pre>
function App() {

    return (

        <h1>Hello</h1>
        <p>React</p>

    )

}
</pre></code>

- React Error dega.

**✅ Correct**

<code><pre>
function App() {

    return (

        <div>
            <h1>Hello</h1>
            <p>React</p>
        </div>

    )

}
</pre></code>

## Rule 2

- React Fragment
- Agar extra div nahi banana.

<code><pre>
&lt;&gt;
    &lt;h1&gt;Hello&lt;/h1&gt;
    &lt;p&gt;Hello&lt;/p&gt;
&lt;/&gt;
</pre></code>

- Ye invisible parent hai.
- Browser me div create nahi hota.

## Rule 3

- Har Tag Close hona chahiye

**❌ Wrong**

``<img>``

**✅ Correct**

``<img />``

## Rule 4

- class nahi className


**❌ Wrong**

``<div class="box">``

**✅ Correct**

``<div className="box">``

- Kyun? JavaScript me `class` reserved keyword hai.
- Isliye React me: `className` use hota hai.

## Rule 5

- for nahi, htmlFor

**❌ Wrong**

``<label for="name">``

**✅ Correct**

``<label htmlFor="name">``


## Rule 6

- JavaScript likhne ke liye Curly Braces `{}` use karte hain.

**Example**

<code><pre>
function App() {

    const name = "Jyoti";
    return (
        <h1>Hello {name}</h1>
    )

}
</pre></code>

**Output**

Hello Jyoti

## Expressions

**Example**
<code><pre>
function App() {

    return (
        <h1>{10 + 20}</h1>
    )

}
</pre></code>

**Output**
30

## Function Call

<code><pre>
function App() {

    function greet() {
        return "Good Morning";
    }

    return (
        <h1>{greet()}</h1>
    )

}
</pre></code>

**Output**
Good Morning

## JSX me kya Allowed hai?

<code><pre>
{name}

{age}

{10+20}

{true}

{false}

{myFunction()}
</pre></code>