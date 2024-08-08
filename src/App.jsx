//src/App.jsx
import React, { useState } from 'react';
import TShirtEditor from './components/TShirtEditor';
import Editor from './components/Editor';
import { colors } from './components';

export default function App() {
  const [color, setColor] = useState('#FFFFFF'); 
  const [image, setImage] = useState('');
  const [text, setText] = useState(''); 
  const [isFrontView, setIsFrontView] = useState(true); 
  const [frontTextObjects, setFrontTextObjects] = useState([]);
  const [backTextObjects, setBackTextObjects] = useState([]);

  const handleColorChange = (newColor) => {
    setColor(newColor); 
  };

  const handleImageUpload = (imageData) => {
    setImage(imageData);
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
      fill: "#000"
    };

    if (isFrontView) {
      setFrontTextObjects(prev => [...prev, textObject]);
    } else {
      setBackTextObjects(prev => [...prev, textObject]);
    }
    setText('');
  };

  const toggleView = () => {
    setIsFrontView(prevView => !prevView);
  };

  return (
    <div className="flex h-screen items-center justify-center">
      <div className="w-full max-w-[1600px] flex">
        <div className="flex-1">
          <TShirtEditor
            color={color} 
            currentSide={isFrontView ? 'front' : 'back'}
            frontTextObjects={frontTextObjects}
            backTextObjects={backTextObjects}
            handleToggleSide={toggleView}
          />
        </div>
        <div className="w-1/2 p-4">
          <h2 className="text-lg font-bold mb-4">Editor</h2>
          <Editor
            color={color}
            handleColorChange={handleColorChange} 
            handleImageUpload={handleImageUpload} 
            text={text} 
            handleTextChange={handleTextChange} 
            handleAddText={handleAddText}
            colors={colors}
          />
        </div>
      </div>
    </div>
  );
}
