<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/module/addlabel.twig */
class __TwigTemplate_ceb6bb62136e5b70cc2a1e1aa1941bae03b3e60d2461c786c4ca8347643fa7fd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 29
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 32
        if ((($context["module_addlabel_status"] ?? null) == 1)) {
            // line 33
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 34
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 36
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 37
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 39
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-labelposition\">";
        // line 44
        echo ($context["entry_labelposition"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_position\" id=\"input-labelposition\" class=\"form-control\">
                ";
        // line 47
        if ((($context["module_label_position"] ?? null) == 3)) {
            // line 48
            echo "
                <option value=\"3\" selected=\"selected\">";
            // line 49
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 50
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 51
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 52
            echo ($context["right_bottom"] ?? null);
            echo "</option>
                

                ";
        } elseif ((        // line 55
($context["module_labelposition"] ?? null) == 2)) {
            // line 56
            echo "
                <option value=\"3\">";
            // line 57
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\" selected=\"selected\">";
            // line 58
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 59
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 60
            echo ($context["right_bottom"] ?? null);
            echo "</option>
                

                ";
        } elseif ((        // line 63
($context["module_labelposition"] ?? null) == 1)) {
            // line 64
            echo "
                <option value=\"3\">";
            // line 65
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 66
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 67
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 68
            echo ($context["right_bottom"] ?? null);
            echo "</option>
                

                ";
        } else {
            // line 72
            echo "                 <option value=\"3\">";
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 73
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 74
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 75
            echo ($context["right_bottom"] ?? null);
            echo "</option>
               
                ";
        }
        // line 78
        echo "              </select>
            </div>
          </div>
         
          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 83
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 85
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
            </div>
          </div>

          <div class=\"form-group\">  
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 90
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 92
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input_height\" class=\"form-control\"/>
            </div>
          </div>
            
\t\t\t
        
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-productpage\">";
        // line 99
        echo ($context["entry_productpage"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_productpage\" id=\"input-productpage\" class=\"form-control\">
                ";
        // line 102
        if ((($context["module_addlabel_productpage"] ?? null) == 1)) {
            // line 103
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 104
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 106
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 107
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 109
        echo "              </select>
            </div>
         
          
\t\t  
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-searchpage\">";
        // line 115
        echo ($context["entry_searchpage"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_searchpage\" id=\"input-searchpage\" class=\"form-control\">
                ";
        // line 118
        if ((($context["module_addlabel_searchpage"] ?? null) == 1)) {
            // line 119
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 120
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 122
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 123
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 125
        echo "              </select>
            </div>
         
\t\t  
\t\t   <div class=\"panel-body\">
        <form action=\"";
        // line 130
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-categorypage\">";
        // line 132
        echo ($context["entry_categorypage"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_categorypage\" id=\"input-categorypage\" class=\"form-control\">
                ";
        // line 135
        if ((($context["module_addlabel_categorypage"] ?? null) == 1)) {
            // line 136
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 137
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 139
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 140
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 142
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"panel-body\">
        <form action=\"";
        // line 146
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-manufacturerpage\">";
        // line 148
        echo ($context["entry_manufacturerpage"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_manufacturerpage\" id=\"input-manufacturerpage\" class=\"form-control\">
                ";
        // line 151
        if ((($context["module_addlabel_manufacturerpage"] ?? null) == 1)) {
            // line 152
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 153
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 155
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 156
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 158
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"panel-body\">
        <form action=\"";
        // line 162
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-comparepage\">";
        // line 164
        echo ($context["entry_comparepage"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_comparepage\" id=\"input-comparepage\" class=\"form-control\">
                ";
        // line 167
        if ((($context["module_addlabel_comparepage"] ?? null) == 1)) {
            // line 168
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 169
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 171
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 172
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 174
        echo "              </select>
            </div>
          </div>
\t\t  
\t\t  
         

              

                
                
          

         
          
        </form>
      </div>
    </div>
  </div>
</div>





";
        // line 199
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/addlabel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 199,  458 => 174,  453 => 172,  448 => 171,  443 => 169,  438 => 168,  436 => 167,  430 => 164,  425 => 162,  419 => 158,  414 => 156,  409 => 155,  404 => 153,  399 => 152,  397 => 151,  391 => 148,  386 => 146,  380 => 142,  375 => 140,  370 => 139,  365 => 137,  360 => 136,  358 => 135,  352 => 132,  347 => 130,  340 => 125,  335 => 123,  330 => 122,  325 => 120,  320 => 119,  318 => 118,  312 => 115,  304 => 109,  299 => 107,  294 => 106,  289 => 104,  284 => 103,  282 => 102,  276 => 99,  264 => 92,  259 => 90,  249 => 85,  244 => 83,  237 => 78,  231 => 75,  227 => 74,  223 => 73,  218 => 72,  211 => 68,  207 => 67,  203 => 66,  199 => 65,  196 => 64,  194 => 63,  188 => 60,  184 => 59,  180 => 58,  176 => 57,  173 => 56,  171 => 55,  165 => 52,  161 => 51,  157 => 50,  153 => 49,  150 => 48,  148 => 47,  142 => 44,  135 => 39,  130 => 37,  125 => 36,  120 => 34,  115 => 33,  113 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/addlabel.twig", "");
    }
}
