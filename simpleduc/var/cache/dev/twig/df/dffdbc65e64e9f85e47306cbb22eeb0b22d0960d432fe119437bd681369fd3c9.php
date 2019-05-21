<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a5eb598a7faa332091e7de57f16f6886d8437dc6da5b68e2a09e71036805189c extends Twig_Template
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
        $__internal_19d1b50e58d8171ecd35aacbb587eb8995b6321f632658218dd244115bdf0217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d1b50e58d8171ecd35aacbb587eb8995b6321f632658218dd244115bdf0217->enter($__internal_19d1b50e58d8171ecd35aacbb587eb8995b6321f632658218dd244115bdf0217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ffa87b87f7891ad3ee43d456208e19952c94caeda68bf6a7db7d218a2297d03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa87b87f7891ad3ee43d456208e19952c94caeda68bf6a7db7d218a2297d03a->enter($__internal_ffa87b87f7891ad3ee43d456208e19952c94caeda68bf6a7db7d218a2297d03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_19d1b50e58d8171ecd35aacbb587eb8995b6321f632658218dd244115bdf0217->leave($__internal_19d1b50e58d8171ecd35aacbb587eb8995b6321f632658218dd244115bdf0217_prof);

        
        $__internal_ffa87b87f7891ad3ee43d456208e19952c94caeda68bf6a7db7d218a2297d03a->leave($__internal_ffa87b87f7891ad3ee43d456208e19952c94caeda68bf6a7db7d218a2297d03a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
