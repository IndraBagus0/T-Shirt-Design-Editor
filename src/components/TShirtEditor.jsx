import React, { useRef, useState, useEffect } from "react";
import * as fabric from "fabric";
import frontImage from "../assets/img/crew_front.png";
import backImage from "../assets/img/crew_back.png";

const TShirtEditor = ({
  color,
  currentSide,
  handleToggleSide,
}) => {
  const canvasRef = useRef(null);
  const [canvas, setCanvas] = useState(null);
  const [textInput, setTextInput] = useState("");
  const [isTextActive, setIsTextActive] = useState(false);
  const [currentImage, setCurrentImage] = useState(null);
  const [frontObjects, setFrontObjects] = useState([]);
  const [backObjects, setBackObjects] = useState([]);

  useEffect(() => {
    const canvasInstance = new fabric.Canvas(canvasRef.current, {
      width: 200,
      height: 300,
      backgroundColor: "",
      selection: true,
    });
    setCanvas(canvasInstance);

    return () => canvasInstance.dispose();
  }, []);

  useEffect(() => {
    if (canvas) {
      const updateCanvas = () => {
        // Clear current canvas
        // canvas.clear();
        canvas.clear();
      
        // Set new image based on current side
        const imageUrl = currentSide === "front" ? frontImage : backImage;
        fabric.Image.fromURL(imageUrl, (img) => {
          img.set({
            scaleX: canvas.width / img.width,
            scaleY: canvas.height / img.height,
          });
      
          canvas.add(img);
          setCurrentImage(img);
      
          // Load and add saved objects for the current side, regardless of changes
          const objectsToLoad = currentSide === "front" ? frontObjects : backObjects;
          objectsToLoad.forEach((obj) => {
            let newObject;
            if (obj.type === "textbox") {
              newObject = new fabric.Textbox(obj.text, {
                left: obj.left,
                top: obj.top,
                fontSize: obj.fontSize,
                fill: obj.fill,
                originX: "left",
                originY: "top",
              });
            } else {
              // Handle other object types (if applicable)
              console.warn(`Unsupported object type: ${obj.type}`);
            }
      
            if (newObject) {
              newObject.on("moving", () => setIsTextActive(true));
              newObject.on("scaling", () => setIsTextActive(true));
              newObject.on("rotating", () => setIsTextActive(true));
              newObject.on("modified", () => setIsTextActive(false));
      
              canvas.add(newObject);
            }
          });
      
          canvas.renderAll();
        });
      };

      updateCanvas();
    }
  }, [currentSide, canvas, frontObjects, backObjects]);

  const handleAddText = () => {
    if (canvas && textInput.trim()) {
      const textObj = new fabric.Textbox(textInput, {
        left: 50,
        top: 50,
        fontSize: 20,
        fill: "#000",
        originX: "left",
        originY: "top",
      });

      textObj.on("moving", () => setIsTextActive(true));
      textObj.on("scaling", () => setIsTextActive(true));
      textObj.on("rotating", () => setIsTextActive(true));
      textObj.on("modified", () => setIsTextActive(false));

      canvas.add(textObj);
      canvas.setActiveObject(textObj);
      textObj.enterEditing();

      canvas.renderAll();
      setTextInput("");

      console.log("Text added:", textInput);
    } else {
      console.log("No text inputted or text input is empty");
    }
  };

  const handleToggleSideWrapper = () => {
    if (canvas) {
      // Save current canvas objects before switching
      const currentObjects = canvas.getObjects().map(obj => ({
        type: obj.type,
        text: obj.text || '',
        left: obj.left,
        top: obj.top,
        fontSize: obj.fontSize,
        fill: obj.fill,
      }));

      if (currentSide === "front") {
        setFrontObjects(currentObjects);
        console.log("Front side objects saved:", currentObjects);
      } else {
        setBackObjects(currentObjects);
        console.log("Back side objects saved:", currentObjects);
      }

      // Now switch the side
      handleToggleSide();
      console.log("Switching to", currentSide === "front" ? "Back" : "Front");
    }
  };

  return (
    <>
      <div className="relative flex justify-center items-center">
        <div
          className="h-tinggiGambar w-lebarGambar overflow-hidden flex justify-center items-center"
          style={{ backgroundColor: color }}
        >
          <img
            id="tshirt-backgroundpicture"
            src={currentSide === "front" ? frontImage : backImage}
            alt="T-Shirt Background"
            className="object-cover h-tinggiGambar w-lebarGambar absolute z-0"
          />
          <canvas
            ref={canvasRef}
            className="absolute z-20"
            style={{
              border: isTextActive ? "1px solid blue" : "none",
            }}
          />
        </div>
      </div>
      <div className="mt-4 flex justify-center space-x-4">
        <button
          onClick={handleToggleSideWrapper}
          className="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700"
        >
          Switch to {currentSide === "front" ? "Back" : "Front"}
        </button>
      </div>
      <div className="mt-4 flex justify-center space-x-4">
        <input
          type="text"
          value={textInput}
          onChange={(e) => setTextInput(e.target.value)}
          className="px-4 py-2 border rounded-md"
          placeholder="Enter text"
        />
        <button
          onClick={handleAddText}
          className="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-700"
        >
          Add Text
        </button>
      </div>
    </>
  );
};

export default TShirtEditor;
