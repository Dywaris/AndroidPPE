<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b532bf82f443e935ff71d72e5c51f9ba3a947fded3241fee47c81a9a4a2d024f extends Twig_Template
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
        $__internal_97b7c8d841c603c0c742fc67ab7fbfadd24d0cf287fd54f1ec706632977bdf37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b7c8d841c603c0c742fc67ab7fbfadd24d0cf287fd54f1ec706632977bdf37->enter($__internal_97b7c8d841c603c0c742fc67ab7fbfadd24d0cf287fd54f1ec706632977bdf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_02fb21fe869c63dbb37104225e0f246f4c85b7da1dbdc44b025c04d37748d02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fb21fe869c63dbb37104225e0f246f4c85b7da1dbdc44b025c04d37748d02c->enter($__internal_02fb21fe869c63dbb37104225e0f246f4c85b7da1dbdc44b025c04d37748d02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_97b7c8d841c603c0c742fc67ab7fbfadd24d0cf287fd54f1ec706632977bdf37->leave($__internal_97b7c8d841c603c0c742fc67ab7fbfadd24d0cf287fd54f1ec706632977bdf37_prof);

        
        $__internal_02fb21fe869c63dbb37104225e0f246f4c85b7da1dbdc44b025c04d37748d02c->leave($__internal_02fb21fe869c63dbb37104225e0f246f4c85b7da1dbdc44b025c04d37748d02c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
