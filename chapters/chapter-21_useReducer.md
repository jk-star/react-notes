# Chapter 21 – useReducer() Hook ⭐

## 1. Pehle Problem Samjho

**Simple Counter:**

`const [count, setCount] = useState(0);`

**Increase:**

`setCount(count + 1);`

**Decrease:**

`setCount(count - 1);`

**Reset:**

`setCount(0);`

- Abhi tak simple hai. ✅
- Lekin maan lo state bahut complex ho gayi:

<code><pre>
Add Product
Remove Product
Increase Quantity
Decrease Quantity
Apply Coupon
Clear Cart
Calculate Total
</pre></code>

- Bahut saare state-update rules ho gaye.
- Yahan `useReducer()` useful ho sakta hai.

## 2. useReducer() Kya Hai?

**Simple definition:**

- useReducer state manage karne ka React Hook hai jisme state update logic ko ek separate reducer function me rakha jata hai.

**Simple flow:**

<code><pre>
User Action
    ↓
dispatch()
    ↓
action
    ↓
reducer()
    ↓
New State
    ↓
UI Update
</pre></code>

- Ye flow samajh aa gaya to `useReducer` ka major concept clear hai.

## 3. Basic Syntax

**Sabse pehle:**

`import { useReducer } from "react";`

**Phir:**

`const [state, dispatch] = useReducer(reducer, initialState);`

**Isko break karte hain.**

- `state` Current data
- `dispatch` Reducer ko batata hai ki kya action perform karna hai:
- `reducer` State update ka logic:
- `initialState` Starting value:

## 4. Pehla useReducer Counter
<code><pre>
import { useReducer } from "react";

function reducer(state, action) {
  if (action.type === "increment") {
    return state + 1;
  }

  if (action.type === "decrement") {
    return state - 1;
  }

  return state;
}

function App() {
  const [count, dispatch] = useReducer(reducer, 0);

  return (
    <>
      <h1>Count: {count}</h1>

      <button
        onClick={() => dispatch({ type: "increment" })}
      >
        +
      </button>

      <button
        onClick={() => dispatch({ type: "decrement" })}
      >
        -
      </button>
    </>
  );
}

export default App;
</pre></code>


## 5. dispatch() Kya Hai?
- dispatch reducer ko instruction bhejta hai.

**Example:**

`dispatch({ type: "increment" });`

- Matlab: Count increase karo.

Another:

`dispatch({ type: "decrement" });`

- Matlab: Count decrease karo.

Another:

`dispatch({ type: "reset" });`

- Matlab: Count reset karo.

## 6. action Kya Hai?

**Ye:**

`{ type: "increment" }`

- Action object hai.
- Usually action ke andar `type` hota hai:

<code><pre>
{
  type: "increment"
}
</pre></code>

- type batata hai: **Kya kaam karna hai?**

## 7. Professional Reducer – switch

- Multiple `if` ki jagah commonly `switch` use kiya jata hai:

<code><pre>
function reducer(state, action) {
  switch (action.type) {
    case "increment":
      return state + 1;

    case "decrement":
      return state - 1;

    case "reset":
      return 0;

    default:
      return state;
  }
}
</pre></code>

**App:**

<code><pre>
function App() {
  const [count, dispatch] = useReducer(reducer, 0);

  return (
    <>
      <h1>{count}</h1>

      <button
        onClick={() => dispatch({ type: "increment" })}
      >
        Increase
      </button>

      <button
        onClick={() => dispatch({ type: "decrement" })}
      >
        Decrease
      </button>

      <button
        onClick={() => dispatch({ type: "reset" })}
      >
        Reset
      </button>
    </>
  );
}
</pre></code>

## 8. useState vs useReducer

**Simple state:**

`const [count, setCount] = useState(0);`

**Perfect. ✅**

Complex state:

<code><pre>
Cart
├── Add
├── Remove
├── Quantity +
├── Quantity -
├── Coupon
└── Clear
</pre></code>

- `useReducer` useful ho sakta hai.

| `useState`                      | `useReducer`                      |
| ------------------------------- | --------------------------------- |
| Simple state                    | Complex state logic               |
| Direct setter                   | `dispatch()`                      |
| `setCount()`                    | `dispatch(action)`                |
| Logic component me ho sakta hai | Logic reducer me centralized      |
| Beginners ke liye simple        | Structured updates ke liye useful |

## 9. Object State Example ⭐

- Ab real use samjho. Initial state:
<code><pre>
const initialState = {
  name: "",
  email: ""
};
</pre></code>

Reducer:

<code><pre>
function reducer(state, action) {
  switch (action.type) {
    case "changeName":
      return {
        ...state,
        name: action.payload
      };

    case "changeEmail":
      return {
        ...state,
        email: action.payload
      };

    default:
      return state;
  }
}
</pre></code>

Component:

<code><pre>
function App() {
  const [state, dispatch] = useReducer(
    reducer,
    initialState
  );

  return (
    <>
      &lt;input
        placeholder="Name"
        onChange={(e) =>
          dispatch({
            type: "changeName",
            payload: e.target.value
          })
        }
      /&gt;
      &lt;input
        placeholder="Email"
        onChange={(e) =>
          dispatch({
            type: "changeEmail",
            payload: e.target.value
          })
        }
      /&gt;

      <h2>{state.name}</h2>
      <p>{state.email}</p>
    </>
  );
}
</pre></code>

## 10. payload Kya Hai?

- Ye bahut important hai.

<code><pre>
dispatch({
  type: "changeName",
  payload: "Jyoti"
});
</pre></code>

Yahan:

<code><pre>
type
 ↓
KYA karna hai?

payload
 ↓
KIS DATA ke saath karna hai?
</pre></code>

Example:

<code><pre>
{
  type: "changeName",
  payload: "Jyoti"
}
</pre></code>

Means:

<code><pre>
Action → Name Change Karo

Data → "Jyoti"
</pre></code>

Reducer me milega:

`action.type`

and

`action.payload`


## Interview Questions

**Q1. useReducer kya hai?**
- Complex/structured state update logic manage karne ka React Hook.

**Q2. `useReducer` kya return karta hai?**
`const [state, dispatch] = useReducer(...);`

**Do important cheeze:**

<code><pre>
state
dispatch
</pre></code>

**Q3. dispatch() kya karta hai?**
- `Reducer` ko action bhejta hai.

**Q4. `Reducer` kya karta hai?**
- Current state aur action leta hai aur new state return karta hai.

<code><pre>
function reducer(state, action) {
  return newState;
}
</pre></code>

**Q5. `payload` kya hai?**

- Action ke saath additional data bhejne ke liye.
