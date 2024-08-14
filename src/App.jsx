//src/App.jsx
import React, { useState } from "react";
import TShirtEditor from "./components/TShirtEditor";
import Editor from "./components/Editor";
import { colors } from "./color/index";

export default function App() {
  const [color, setColor] = useState("#FFFFFF");
  const [text, setText] = useState("");
  const [currentSide, setCurrentSide] = useState("front");
  const [frontTextObjects, setFrontTextObjects] = useState([]);
  const [backTextObjects, setBackTextObjects] = useState([]);

  const handleColorChange = (newColor) => {
    setColor(newColor);
  };

  const handleTextChange = (e) => {
    setText(e.target.value);
  };

  const handleAddText = () => {
    const textObject = {
      text: text,
      left: 100,
      top: 100,
      fontSize: 20,
      fill: "#000",
    };

    if (currentSide === "front") {
      setFrontTextObjects((prev) => [...prev, textObject]);
    } else {
      setBackTextObjects((prev) => [...prev, textObject]);
    }
    setText("");
  };

  const handleToggleSide = () => {
    setCurrentSide((prev) => (prev === "front" ? "back" : "front"));
  };

  return (
    <div className="flex h-screen items-center justify-center">
      <div className="w-full max-w-[1600px] flex">
        <div className="flex-1">
          <TShirtEditor
            color={color}
            currentSide={currentSide}
            frontTextObjects={frontTextObjects}
            setFrontTextObjects={setFrontTextObjects}
            backTextObjects={backTextObjects}
            setBackTextObjects={setBackTextObjects}
            handleToggleSide={handleToggleSide}
          />
        </div>
        <div className="w-1/2 p-4">
          <h2 className="text-lg font-bold mb-4">Editor</h2>
          <Editor
            color={color}
            handleColorChange={handleColorChange}
            text={text}
            handleTextChange={handleTextChange}
            handleAddText={handleAddText}
            colors={colors}
            currentSide={currentSide}
          />
        </div>
      </div>
    </div>
  );
}
