<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b529b70bb1497083403274d9289b7646756918884809b6248f80c2a2f548ed3b extends Twig_Template
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
        $__internal_46baca1105b517e3203c281ee60ef21c813af336286a85dc23545ce96f74c3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46baca1105b517e3203c281ee60ef21c813af336286a85dc23545ce96f74c3cb->enter($__internal_46baca1105b517e3203c281ee60ef21c813af336286a85dc23545ce96f74c3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_2148a5b7f733e818674dd040aef13a2adb563e531dd86cd95885140b960a8c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2148a5b7f733e818674dd040aef13a2adb563e531dd86cd95885140b960a8c43->enter($__internal_2148a5b7f733e818674dd040aef13a2adb563e531dd86cd95885140b960a8c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_46baca1105b517e3203c281ee60ef21c813af336286a85dc23545ce96f74c3cb->leave($__internal_46baca1105b517e3203c281ee60ef21c813af336286a85dc23545ce96f74c3cb_prof);

        
        $__internal_2148a5b7f733e818674dd040aef13a2adb563e531dd86cd95885140b960a8c43->leave($__internal_2148a5b7f733e818674dd040aef13a2adb563e531dd86cd95885140b960a8c43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
