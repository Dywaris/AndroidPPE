<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_b75f0d9fb24339fc996e6d3d3a1697ffcba1e4cf729a6a8494ac6e7aba93abae extends Twig_Template
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
        $__internal_800b49a1677a49be8b4bbe07240d70d16825d8037127711d6e81722c3fb37729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800b49a1677a49be8b4bbe07240d70d16825d8037127711d6e81722c3fb37729->enter($__internal_800b49a1677a49be8b4bbe07240d70d16825d8037127711d6e81722c3fb37729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_9e87b46f73f19470c2650f9ee773db64a465b1e8642bd4228b24fb1c516e2d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e87b46f73f19470c2650f9ee773db64a465b1e8642bd4228b24fb1c516e2d49->enter($__internal_9e87b46f73f19470c2650f9ee773db64a465b1e8642bd4228b24fb1c516e2d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_800b49a1677a49be8b4bbe07240d70d16825d8037127711d6e81722c3fb37729->leave($__internal_800b49a1677a49be8b4bbe07240d70d16825d8037127711d6e81722c3fb37729_prof);

        
        $__internal_9e87b46f73f19470c2650f9ee773db64a465b1e8642bd4228b24fb1c516e2d49->leave($__internal_9e87b46f73f19470c2650f9ee773db64a465b1e8642bd4228b24fb1c516e2d49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
