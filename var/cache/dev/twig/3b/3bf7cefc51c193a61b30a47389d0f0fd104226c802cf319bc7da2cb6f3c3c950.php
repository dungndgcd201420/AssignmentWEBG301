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

/* products/shirt_show.html.twig */
class __TwigTemplate_6ace270da4362c07b384c7e41ceb23ac8399581ce4b6cbc8c15b0441e414fbd1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/shirt_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/shirt_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/shirt_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " <table>
    <tbody>
    <tr>
      <th>ID of Shirt</th>
      <td>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shirt"]) || array_key_exists("shirt", $context) ? $context["shirt"] : (function () { throw new RuntimeError('Variable "shirt" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</td>
    </tr>
    <tr>
     <tr>
      <th>Name of Shirt</th>
      <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shirt"]) || array_key_exists("shirt", $context) ? $context["shirt"] : (function () { throw new RuntimeError('Variable "shirt" does not exist.', 13, $this->source); })()), "Name", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
    </tr>
    <tr>
     <tr>
      <th>Brand of Shirt</th>
      <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shirt"]) || array_key_exists("shirt", $context) ? $context["shirt"] : (function () { throw new RuntimeError('Variable "shirt" does not exist.', 18, $this->source); })()), "Brand", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <th>Shirt Color</th>
      <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shirt"]) || array_key_exists("shirt", $context) ? $context["shirt"] : (function () { throw new RuntimeError('Variable "shirt" does not exist.', 22, $this->source); })()), "Color", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <th>Shirt Price</th>
      <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shirt"]) || array_key_exists("shirt", $context) ? $context["shirt"] : (function () { throw new RuntimeError('Variable "shirt" does not exist.', 26, $this->source); })()), "Price", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <th>Shirt Quantity</th>
      <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shirt"]) || array_key_exists("shirt", $context) ? $context["shirt"] : (function () { throw new RuntimeError('Variable "shirt" does not exist.', 30, $this->source); })()), "Quantity", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
    </tr>

    </tbody>
  </table>

  <ul>
    <li>
      <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shirt_index");
        echo "\">Back to the list</a>
    </li>
  </ul>


 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "products/shirt_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  111 => 30,  104 => 26,  97 => 22,  90 => 18,  82 => 13,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
 <table>
    <tbody>
    <tr>
      <th>ID of Shirt</th>
      <td>{{ shirt.id }}</td>
    </tr>
    <tr>
     <tr>
      <th>Name of Shirt</th>
      <td>{{ shirt.Name }}</td>
    </tr>
    <tr>
     <tr>
      <th>Brand of Shirt</th>
      <td>{{ shirt.Brand}}</td>
    </tr>
    <tr>
      <th>Shirt Color</th>
      <td>{{shirt.Color }}</td>
    </tr>
    <tr>
      <th>Shirt Price</th>
      <td>{{ shirt.Price }}</td>
    </tr>
    <tr>
      <th>Shirt Quantity</th>
      <td>{{ shirt.Quantity}}</td>
    </tr>

    </tbody>
  </table>

  <ul>
    <li>
      <a href=\"{{ path('shirt_index') }}\">Back to the list</a>
    </li>
  </ul>


 
{% endblock %}", "products/shirt_show.html.twig", "C:\\Users\\my_pc\\AssignmentWEBG301-BranchKhanh\\templates\\products\\shirt_show.html.twig");
    }
}
