import React, { useEffect, useRef } from "react";
import * as fabric from "fabric";

const CanvasComponent = ({ imageUrl, textObjects, onTextModified }) => {
  const canvasRef = useRef(null);

  useEffect(() => {
    // Initialize fabric canvas
    const canvasInstance = new fabric.Canvas(canvasRef.current, {
      width: 200,
      height: 300,
      backgroundColor: "",
      selection: true,
    });

    // Load image and text objects
    fabric.Image.fromURL(imageUrl, (img) => {
      img.set({
        scaleX: canvasInstance.width / img.width,
        scaleY: canvasInstance.height / img.height,
      });
      canvasInstance.clear();
      canvasInstance.add(img);
      canvasInstance.renderAll();

      textObjects.forEach((text) => {
        const textObj = new fabric.Textbox(text.text, {
          left: text.left,
          top: text.top,
          fontSize: text.fontSize,
          fill: text.fill,
          originX: "left",
          originY: "top",
        });

        textObj.on("modified", () => onTextModified(textObj));
        canvasInstance.add(textObj);
      });

      canvasInstance.renderAll();
    });

    // Cleanup on unmount
    return () => {
      if (canvasInstance) {
        canvasInstance.dispose();
      }
    };
  }, [imageUrl, textObjects, onTextModified]);

  return <canvas ref={canvasRef} className="absolute z-20" />;
};

export default CanvasComponent;
