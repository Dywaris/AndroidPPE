<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a13187f3e11630685a3fb0a324a86a31bcb0116fd93b4bf197df023fc46e0d0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95f48ba9248c8f448c4b8b920aaaed6a00a29d1af54a952f81ad77ddde8bc133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f48ba9248c8f448c4b8b920aaaed6a00a29d1af54a952f81ad77ddde8bc133->enter($__internal_95f48ba9248c8f448c4b8b920aaaed6a00a29d1af54a952f81ad77ddde8bc133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_f02e8424ed78201ed8de12b2cc52193e43d06cc545cb07db0968bfb4a314d523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02e8424ed78201ed8de12b2cc52193e43d06cc545cb07db0968bfb4a314d523->enter($__internal_f02e8424ed78201ed8de12b2cc52193e43d06cc545cb07db0968bfb4a314d523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_95f48ba9248c8f448c4b8b920aaaed6a00a29d1af54a952f81ad77ddde8bc133->leave($__internal_95f48ba9248c8f448c4b8b920aaaed6a00a29d1af54a952f81ad77ddde8bc133_prof);

        
        $__internal_f02e8424ed78201ed8de12b2cc52193e43d06cc545cb07db0968bfb4a314d523->leave($__internal_f02e8424ed78201ed8de12b2cc52193e43d06cc545cb07db0968bfb4a314d523_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
