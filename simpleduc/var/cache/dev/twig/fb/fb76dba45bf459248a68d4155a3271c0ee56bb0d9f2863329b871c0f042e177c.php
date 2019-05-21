<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_a5a33877b7cfb9cd4fbd8fab67aeb222792f00bea6a6c7611ffa28641b324d51 extends Twig_Template
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
        $__internal_09102cdabbabddd2b54d0a6594d0180533b8714b90afdd13fe5871985e11fd6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09102cdabbabddd2b54d0a6594d0180533b8714b90afdd13fe5871985e11fd6b->enter($__internal_09102cdabbabddd2b54d0a6594d0180533b8714b90afdd13fe5871985e11fd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_845a4f87232c6f9edd81169c25c72702d11883ba6efdc94fc308b9008b15fed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845a4f87232c6f9edd81169c25c72702d11883ba6efdc94fc308b9008b15fed4->enter($__internal_845a4f87232c6f9edd81169c25c72702d11883ba6efdc94fc308b9008b15fed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_09102cdabbabddd2b54d0a6594d0180533b8714b90afdd13fe5871985e11fd6b->leave($__internal_09102cdabbabddd2b54d0a6594d0180533b8714b90afdd13fe5871985e11fd6b_prof);

        
        $__internal_845a4f87232c6f9edd81169c25c72702d11883ba6efdc94fc308b9008b15fed4->leave($__internal_845a4f87232c6f9edd81169c25c72702d11883ba6efdc94fc308b9008b15fed4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
