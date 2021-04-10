import React from "react";
import ReactDOM from "react-dom";

const InputSimple = () => {
    return (
        <div className="form-group">
            <input type="text" className="form-control form-control-sm" />
            <label></label>
        </div>
    );
};

export default InputSimple;

if (document.getElementById("inputSimple")) {
    ReactDOM.render(<InputSimple />, document.className("inputSimple"));
}
