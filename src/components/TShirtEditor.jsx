import React, { useRef, useState, useEffect } from "react";
import * as fabric from "fabric";
import frontImage from "../assets/img/crew_front.png";
import backImage from "../assets/img/crew_back.png";

const TShirtEditor = ({ color }) => {
  const canvasRef = useRef(null);
  const [canvas, setCanvas] = useState(null);
  const [textInput, setTextInput] = useState("");
  const [currentSide, setCurrentSide] = useState("front");
  const [frontTextObjects, setFrontTextObjects] = useState([]);
  const [backTextObjects, setBackTextObjects] = useState([]);

  useEffect(() => {
    const canvasInstance = new fabric.Canvas(canvasRef.current, {
      width: 200,
      height: 400,
      backgroundColor: "",
      selection: true,
    });
    setCanvas(canvasInstance);

    return () => canvasInstance.dispose();
  }, []);


  const handleAddText = () => {
    const textObject = new fabric.Textbox(textInput, {
      left: canvas.width / 2,
      top: canvas.height / 2,
      originX: "center",
      originY: "center",
      fontSize: 20,
      fill: "#000",
      backgroundColor: "",
      editable: true,
      selectable: true,
    });
    if (currentSide === "front") {
      setFrontTextObjects(prev => [...prev, textObject]);
    } else {
      setBackTextObjects(prev => [...prev, textObject]);
    }
    canvas.add(textObject);
    setTextInput("");
  };

  const handleTextInputChange = (e) => {
    setTextInput(e.target.value);
  };

  const handleKeyDown = (e) => {
    if (e.keyCode === 46) {
      const activeObject = canvas.getActiveObject();
      if (activeObject) {
        canvas.remove(activeObject);

        // Remove text object from the current side's array
        if (currentSide === "front") {
          setFrontTextObjects(prev => prev.filter(text => text !== activeObject));
        } else {
          setBackTextObjects(prev => prev.filter(text => text !== activeObject));
        }
      }
    }
  };

  useEffect(() => {
    document.addEventListener("keydown", handleKeyDown);
    return () => {
      document.removeEventListener("keydown", handleKeyDown);
    };
  }, [canvas, currentSide]);

  const handleToggleSide = () => {
    const newSide = currentSide === "front" ? "back" : "front";
    if (canvas) {
      // Save current text objects before switching
      const textObjects = currentSide === "front" ? frontTextObjects : backTextObjects;
      textObjects.forEach(text => canvas.remove(text));
      canvas.clear();
      setCurrentSide(newSide);

      // Load the new side's text objects
      const newTextObjects = newSide === "front" ? frontTextObjects : backTextObjects;
      fabric.Image.fromURL(newSide === "front" ? frontImage : backImage, (img) => {
        img.scaleToWidth(canvas.width);
        img.scaleToHeight(canvas.height);
        canvas.add(img);
        newTextObjects.forEach(text => canvas.add(text));
        canvas.renderAll();
      });
    }
  };

  return (
    <div>
      <div
        style={{
          width: "452px",
          height: "548px",
          position: "relative",
          backgroundColor: color,
          display: "flex",
          justifyContent: "center",
          alignItems: "center",
        }}
      >
        <img
          id="tshirt-backgroundpicture"
          src={currentSide === "front" ? frontImage : backImage}
          alt="T-Shirt Background"
          style={{
            width: "100%",
            height: "100%",
            position: "absolute",
            top: 0,
            left: 0,
            zIndex: 1,
          }}
        />
        <canvas
          ref={canvasRef}
          style={{
            position: "absolute",
            width: "200px",
            height: "400px",
            cursor: "default",
            zIndex: 2,
          }}
        ></canvas>
      </div>

      <div>
        <br />
        <label htmlFor="text-input">Add Text:</label>
        <input
          type="text"
          id="text-input"
          value={textInput}
          onChange={handleTextInputChange}
          placeholder="Enter text"
        />
        <button onClick={handleAddText}>Add Text to Design</button>

        <br />
        <button onClick={handleToggleSide}>
          Switch to {currentSide === "front" ? "Back" : "Front"}
        </button>
      </div>
    </div>
  );
};

export default TShirtEditor;
