//src/components/Editor.jsx
import React, { useState } from 'react';
import ColorPicker from './ColorPicker';
import ImageUploader from './ImageUploader';
import TextInput from './TextInput';

const Editor = ({
  color,
  handleColorChange,
  handleImageUpload,
  handleTextChange,
  handleAddText,
  text,
  colors
}) => {
  const [activeTab, setActiveTab] = useState('product');

  const handleTabChange = (tab) => {
    setActiveTab(tab);
  };

  return (
    <div>
      <div className="mb-4">
        <table className="w-full border-collapse">
          <thead>
            <tr>
              <th className="border p-2 text-left">
                <button
                  onClick={() => handleTabChange('product')}
                  className={`w-full py-2 rounded ${activeTab === 'product' ? 'bg-white' : 'bg-gray-200'}`}
                >
                  Product
                </button>
              </th>
              <th className="border p-2 text-left">
                <button
                  onClick={() => handleTabChange('addImage')}
                  className={`w-full py-2 rounded ${activeTab === 'addImage' ? 'bg-white' : 'bg-gray-200'}`}
                >
                  Add Images
                </button>
              </th>
              <th className="border p-2 text-left">
                <button
                  onClick={() => handleTabChange('addText')}
                  className={`w-full py-2 rounded ${activeTab === 'addText' ? 'bg-white' : 'bg-gray-200'}`}
                >
                  Add Text
                </button>
              </th>
              <th className="border p-2 text-left">
                <button
                  onClick={() => handleTabChange('saveDesign')}
                  className={`w-full py-2 rounded ${activeTab === 'saveDesign' ? 'bg-white' : 'bg-gray-200'}`}
                >
                  Save/Load
                </button>
              </th>
            </tr>
          </thead>
        </table>
      </div>

      {activeTab === 'product' && (
        <ColorPicker color={color} handleColorChange={handleColorChange} colors={colors} />
      )}
      {activeTab === 'addImage' && (
        <ImageUploader handleImageUpload={handleImageUpload} />
      )}
      {activeTab === 'addText' && (
        <TextInput
          text={text}
          handleTextChange={handleTextChange}
          handleAddText={handleAddText}
        />
      )}
      {activeTab === 'saveDesign' && <div>Save/Load Component</div>}
      {activeTab === 'quoteBuy' && <div>Quote/Buy Component</div>}
    </div>
  );
};

export default Editor;
